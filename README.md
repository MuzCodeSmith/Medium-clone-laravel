# Medium Clone - Laravel Fullstack Blog Platform

A Medium-like blogging platform built using Laravel. This application allows users to read, write, like, and follow posts and authors, with full authentication and content publishing features.

## Features

- Public Blog Posts: View published posts with title, author, likes, publication date, and reading time.
- Post Details: Click into posts to see full content, author avatar, category, and estimated read time.
- Category Filtering: Filter posts by categories such as Technology, Health, and Science.
- User Profiles: View public profiles showing a user's posts, follower count, and bio.
- Authentication: Register and log in with email verification required.
- Follow System: Authenticated users can follow/unfollow other users to curate their homepage feed.
- Like System: Like and unlike posts to engage with content.
- Personalized Feed: Once logged in, users see posts only from authors they follow.
- Post Creation: Authenticated users can create, edit, and schedule posts with image upload.
- Future Publishing: Posts can be scheduled for future publication.
- User Settings: Users can update profile picture and bio from their profile page.

## Getting Started

### Requirements

- PHP >= 8.1
- Laravel >= 10
- Composer
- MySQL or other supported DB
- Node.js and npm (for frontend assets)

### Installation

1. Clone the repo:
   `bash
   git clone https://github.com/yourusername/medium-clone-laravel.git
   cd medium-clone-laravel