<?php
require_once __DIR__ . '/resend.php';

enable_cors();

header('Content-Type: application/json');

// Try connecting to database if db.php exists
$jobs = [];
if (file_exists(dirname(__DIR__) . '/db.php')) {
    try {
        require_once dirname(__DIR__) . '/db.php';
        if (isset($pdo)) {
            $stmt = $pdo->query("SELECT * FROM careers WHERE is_active = true ORDER BY created_at DESC");
            $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    } catch (Exception $e) {
        // Fallback to static mock jobs if DB query fails
    }
}

// Fallback to standard 6 active career roles if DB is empty or unavailable
if (empty($jobs)) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'IT Support Executive',
            'department' => 'Technical Support',
            'location' => 'Coimbatore / On-site',
            'type' => 'Full Time',
            'experience' => '1 - 3 Years',
            'description' => 'Provide L1/L2 technical support, hardware troubleshooting, and client query resolution.'
        ],
        [
            'id' => 2,
            'title' => 'Service Engineer',
            'department' => 'Field Operations',
            'location' => 'Coimbatore / On-site',
            'type' => 'Full Time',
            'experience' => '2+ Years',
            'description' => 'On-site maintenance, system installation, and hardware component diagnostics.'
        ],
        [
            'id' => 3,
            'title' => 'CCTV Technician',
            'department' => 'Security Systems',
            'location' => 'Coimbatore / On-site',
            'type' => 'Full Time',
            'experience' => '1+ Years',
            'description' => 'Installation, wiring, configuration, and troubleshooting of IP & Analog CCTV systems.'
        ],
        [
            'id' => 4,
            'title' => 'Network Engineer',
            'department' => 'Infrastructure',
            'location' => 'Coimbatore / Hybrid',
            'type' => 'Full Time',
            'experience' => '2 - 4 Years',
            'description' => 'Manage corporate LAN/WAN, router/switch setups, VPNs, and firewall security.'
        ],
        [
            'id' => 5,
            'title' => 'Digital Marketing Specialist',
            'department' => 'Marketing',
            'location' => 'Coimbatore / Remote',
            'type' => 'Full Time',
            'experience' => '1 - 3 Years',
            'description' => 'Manage social media campaigns, SEO/SEM optimizations, lead generation, and content creation.'
        ],
        [
            'id' => 6,
            'title' => 'HR Recruiter',
            'department' => 'Human Resources',
            'location' => 'Coimbatore / On-site',
            'type' => 'Full Time',
            'experience' => '1 - 3 Years',
            'description' => 'Talent acquisition, candidate screening, interview scheduling, and employee onboarding.'
        ]
    ];
}

echo json_encode([
    'success' => true,
    'count' => count($jobs),
    'data' => $jobs
]);
?>
