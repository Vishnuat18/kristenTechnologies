-- setup_full_db.sql
-- Run this in pgAdmin query tool to create all tables for Kristen Technologies

-- 1. Applications Table (Already exists, but adding IF NOT EXISTS)
CREATE TABLE IF NOT EXISTS applications (
    id SERIAL PRIMARY KEY,
    job_title VARCHAR(255) NOT NULL,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    portfolio VARCHAR(255),
    cover_letter TEXT,
    resume_name VARCHAR(255) NOT NULL,
    resume_data BYTEA NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Contact Messages Table
CREATE TABLE IF NOT EXISTS contact_messages (
    id SERIAL PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    subject VARCHAR(255),
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Newsletter Subscribers Table
CREATE TABLE IF NOT EXISTS newsletter_subscribers (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 4. Users Table (For Sign In / Sign Up)
CREATE TABLE IF NOT EXISTS users (
    id SERIAL PRIMARY KEY,
    fullname VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    role VARCHAR(50) DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 5. Jobs Table (Dynamic Career Listings)
CREATE TABLE IF NOT EXISTS jobs (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    type VARCHAR(50) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 6. Blog Posts Table
CREATE TABLE IF NOT EXISTS blog_posts (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    category VARCHAR(100),
    author VARCHAR(100),
    excerpt TEXT,
    content TEXT NOT NULL,
    image_path VARCHAR(255),
    published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert dummy data for jobs so they appear on the careers page immediately
INSERT INTO jobs (title, location, type, is_active) VALUES
('IT Support Executive', 'Salem', 'Full Time', true),
('Service Engineer', 'Salem', 'Full Time', true),
('CCTV Technician', 'Salem', 'Full Time', true),
('Digital Marketing', 'Remote / Salem', 'Full Time', true),
('Network Engineer', 'Remote / Salem', 'Full Time', true),
('HR Recruiter', 'Remote / Salem', 'Full Time', true)
ON CONFLICT DO NOTHING;

-- Insert dummy data for blogs so blog grid works
INSERT INTO blog_posts (title, slug, category, author, excerpt, content, image_path) VALUES
('The Future of IT in Salem', 'future-of-it-salem', 'Technology', 'Admin', 'How local businesses are adapting to modern IT infrastructure.', 'Full content goes here...', 'images/blog-1.jpg'),
('Why You Need AMC', 'why-you-need-amc', 'Services', 'Admin', 'Annual Maintenance Contracts save you money and downtime.', 'Full content goes here...', 'images/blog-2.jpg'),
('Top 5 CCTV Brands in 2025', 'top-cctv-brands-2025', 'Security', 'Admin', 'A comprehensive review of the best surveillance cameras.', 'Full content goes here...', 'images/blog-3.jpg')
ON CONFLICT (slug) DO NOTHING;
