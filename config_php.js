const fs = require('fs');
const path = require('path');

const phpDir = 'C:\\Users\\vishn\\Downloads\\php-8.5.8-Win32-vs17-x64';
const iniSource = path.join(phpDir, 'php.ini-development');
const iniDest = path.join(phpDir, 'php.ini');

// Copy php.ini-development to php.ini
if (fs.existsSync(iniSource)) {
    let iniContent = fs.readFileSync(iniSource, 'utf8');

    // Uncomment extension_dir = "ext"
    iniContent = iniContent.replace(/;extension_dir = "ext"/g, 'extension_dir = "ext"');
    iniContent = iniContent.replace(/; extension_dir = "ext"/g, 'extension_dir = "ext"');

    // Uncomment pdo_pgsql and pgsql
    iniContent = iniContent.replace(/;extension=pdo_pgsql/g, 'extension=pdo_pgsql');
    iniContent = iniContent.replace(/;extension=pgsql/g, 'extension=pgsql');

    fs.writeFileSync(iniDest, iniContent, 'utf8');
    console.log('Successfully created and configured php.ini');
} else {
    console.log('php.ini-development not found.');
}
