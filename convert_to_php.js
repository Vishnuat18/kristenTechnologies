const fs = require('fs');
const path = require('path');

const dir = './';
const includesDir = path.join(dir, 'includes');

if (!fs.existsSync(includesDir)) {
    fs.mkdirSync(includesDir);
}

const indexHtml = fs.readFileSync(path.join(dir, 'index.html'), 'utf8');

// 1. Extract Header
const headerEndMarker = '<!-- END: MainHeader -->';
const headerEndIndex = indexHtml.indexOf(headerEndMarker) + headerEndMarker.length;
let headerContent = indexHtml.substring(0, headerEndIndex);

// Replace title and description in headerContent
headerContent = headerContent.replace(
    /<title>.*?<\/title>/s,
    '<title><?= $page_title ?? "Kristen Byte Solutions" ?></title>'
);
headerContent = headerContent.replace(
    /<meta name="description" content=".*?"/s,
    '<meta name="description" content="<?= htmlspecialchars($page_description ?? "") ?>"'
);
// Fix hrefs in header
headerContent = headerContent.replace(/href="([^"]+)\.html"/g, 'href="$1.php"');

fs.writeFileSync(path.join(includesDir, 'header.php'), headerContent);

// 2. Extract Footer
const footerStartMarker = '<!-- BEGIN: Footer -->';
const footerStartIndex = indexHtml.indexOf(footerStartMarker);
let footerContent = indexHtml.substring(footerStartIndex);

// Fix JS active link logic to use .php
footerContent = footerContent.replace(/'index\.html'/g, "'index.php'");
// Fix hrefs in footer just in case
footerContent = footerContent.replace(/href="([^"]+)\.html"/g, 'href="$1.php"');

fs.writeFileSync(path.join(includesDir, 'footer.php'), footerContent);

// 3. Process all .html files
const files = fs.readdirSync(dir);

for (const file of files) {
    if (file.endsWith('.html') && fs.statSync(path.join(dir, file)).isFile()) {
        let content = fs.readFileSync(path.join(dir, file), 'utf8');
        
        // Extract title
        let titleMatch = content.match(/<title>(.*?)<\/title>/s);
        let pageTitle = titleMatch ? titleMatch[1].trim().replace(/"/g, '\\"') : "Kristen Byte Solutions";
        
        // Extract description
        let descMatch = content.match(/<meta name="description" content="(.*?)"/s);
        let pageDesc = descMatch ? descMatch[1].trim().replace(/"/g, '\\"') : "";
        
        // Remove Header
        let fileHeaderEndIndex = content.indexOf(headerEndMarker);
        if (fileHeaderEndIndex !== -1) {
            content = content.substring(fileHeaderEndIndex + headerEndMarker.length);
        } else {
            // Fallback if header marker is missing
            let fallbackEnd = content.indexOf('</header>');
            if(fallbackEnd !== -1) {
                content = content.substring(fallbackEnd + 9);
            }
        }
        
        // Remove Footer
        let fileFooterStartIndex = content.indexOf(footerStartMarker);
        if (fileFooterStartIndex !== -1) {
            content = content.substring(0, fileFooterStartIndex);
        } else {
            // Fallback
            let fallbackStart = content.lastIndexOf('<footer');
            if(fallbackStart !== -1) {
                content = content.substring(0, fallbackStart);
            }
        }
        
        // Replace links in content
        content = content.replace(/href="([^"]+)\.html"/g, 'href="$1.php"');
        
        // Replace action links in forms
        content = content.replace(/action="([^"]+)\.html"/g, 'action="$1.php"');
        
        // Reassemble
        let newContent = `<?php\n$page_title = "${pageTitle}";\n$page_description = "${pageDesc}";\nrequire_once 'includes/header.php';\n?>\n` +
                         content +
                         `\n<?php require_once 'includes/footer.php'; ?>\n`;
                         
        // Save as .php
        let newFileName = file.replace('.html', '.php');
        fs.writeFileSync(path.join(dir, newFileName), newContent);
        
        // Delete .html
        fs.unlinkSync(path.join(dir, file));
        
        console.log(`Converted ${file} to ${newFileName}`);
    }
}

console.log("Conversion script finished!");
