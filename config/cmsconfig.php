<?php
return [
    //List of modules are defined here
    'modules' => [
        'home' => "Admin Dashboard",
        'banner' => "Banner Management",
        'news' => "News Management",
        'project' => "Upcoming Project",
        'job' => "Job management",
//        'page' => "Page Management",
        'about' => "About Management",
        'committee' => "Committee Management",
        'headerImage' => "Header Image Management",
        'gallery' => "Gallery Management",
        'pdf' => "PDF Management",
        'team' => "Team Management",
        'contact' => "Contact Management",
        'user' => "User Management",
        'setting' => "Setting",
    ],
    //Module sub modules contains here
    'modulepages' => [
        'home' => ['home' => 'Admin Dashboard'],
        'user' => ['role' => 'Roles', 'user' => 'Users'],
        'about' => ['aboutEnglish' => 'About English', 'aboutNepali' => 'About Nepali'],
        'committee' => ['committeeEnglish' => 'Committee English', 'committeeNepali' => 'Committee Nepali'],
        'news' => ["news" => "News Management"],
        'banner' => ["banner" => "Banner Management"],
        'project' => ["project" => "Upcoming Project"],
        'setting' => ["setting" => "Site Setting"],
        'page' => ["page" => "Page Management"],
        'headerImage' => ["headerImage" => "Header Image Management"],
        'pdf' => ["pdf" => "Pdf Management"],
        'contact' => ["contact" => "Contact Management"],
        'team' => ["team" => "Team Management"],
        'job' => ["job" => "Job Management"],
        'gallery' => ["gallery" => "Gallery Management"],
    ],
    //Permissions for each module is defined here
    'modulepermissions' => [


        'user' => [
            //Roles Sub Module
            'user.role.index' => 'View Roles',
            'user.role.create' => 'Create Roles',
            'user.role.edit' => 'Edit Roles',
            'user.role.destroy' => 'Delete Roles',
            //Users Sub Module
            'user.user.index' => 'View Users',
            'user.user.create' => 'Create Users',
            'user.user.edit' => 'Edit Users',
            'user.user.destroy' => 'Delete Users',

            'user.user.profile' => 'Change Personal Profile',

        ],
        'setting' => [

        ], 'setting.setting.index' => 'View setting',

        'news' => [
            'news.news.index' => 'View News',
            'news.news.create' => 'Create News',
            'news.news.edit' => 'Edit News',
            'news.news.destroy' => 'Delete News',
        ],

        'project' => [
            'project.project.index' => 'View Project',
            'project.project.create' => 'Create Project',
            'project.project.edit' => 'Edit Project',
            'project.project.destroy' => 'Delete Project',
        ],

        'banner' => [
            'banner.banner.index' => 'View Banner',
            'banner.banner.create' => 'Create Banner',
            'banner.banner.edit' => 'Edit Banner',
            'banner.banner.destroy' => 'Delete Banner',
        ],
        'page' => [
            'page.page.index' => 'View Page',
            'page.page.create' => 'Create Page',
            'page.page.edit' => 'Edit Page',
            'page.page.destroy' => 'Delete Page',
        ],
        'job' => [
            'job.job.index' => 'View Job',
            'job.job.create' => 'Create Job',
            'job.job.edit' => 'Edit JOb',
            'job.job.destroy' => 'Delete JOb',
        ],
        'contact' => [
            'contact.contact.index' => 'View Contact',

        ], 'pdf' => [
            'pdf.pdf.index' => 'View pdf',
            'pdf.pdf.create' => 'Create pdf',
            'pdf.pdf.edit' => 'Edit pdf',
            'pdf.pdf.destroy' => 'Delete pdf',
        ],
        'team' => [
            'team.team.index' => 'View team',
            'team.team.create' => 'Create team',
            'team.team.edit' => 'Edit team',
            'team.team.destroy' => 'Delete team',
        ],
        'gallery' => [
            'gallery.gallery.index' => 'View Gallery',
            'gallery.gallery.create' => 'Create Gallery',
            'gallery.gallery.edit' => 'Edit Gallery',
            'gallery.gallery.destroy' => 'Delete Gallery',
        ],
        'headerImage' => [
            'headerImage.headerImage.index' => 'View headerImage',
            'headerImage.headerImage.create' => 'Create headerImage',
            'headerImage.headerImage.edit' => 'Edit headerImage',
            'headerImage.headerImage.destroy' => 'Delete headerImage',
        ],

        'about' => [
            //Roles Sub Module
            'about.aboutNepali.index' => 'View aboutNepali',
            'about.aboutNepali.create' => 'Create aboutNepali',
            'about.aboutNepali.edit' => 'Edit aboutNepali',
            'about.aboutNepali.destroy' => 'Delete aboutNepali',
            //Users Sub Module
            'about.aboutEnglish.index' => 'View About',
            'about.aboutEnglish.create' => 'Create About',
            'about.aboutEnglish.edit' => 'Edit About',
            'about.aboutEnglish.destroy' => 'Delete About',


        ],

        'committee' => [
            //Roles Sub Module
            'committee.committeeNepali.index' => 'View aboutNepali',
            'committee.committeeNepali.create' => 'Create committeeNepali',
            'committee.committeeNepali.edit' => 'Edit committeeNepali',
            'committee.committeeNepali.destroy' => 'Delete committeeNepali',
            //Users Sub Module
            'committee.committeeEnglish.index' => 'View committee',
            'committee.committeeEnglish.create' => 'Create committee',
            'committee.committeeEnglish.edit' => 'Edit committee',
            'committee.committeeEnglish.destroy' => 'Delete committee',


        ],

    ],
    //Icons for eash modules is defined here
    'moduleicons' => [
        'home' => 'icon-home',
        'user' => 'icon-users',
        'news' => 'fa fa-id-card-o',
        'project' => 'fa fa-codepen',
        'setting' => 'fa fa-cogs',
        'job' => 'fa fa-futbol-o',
        'contact' => 'fa fa-telegram',
        'pdf' => 'fa fa-file-text-o',
        'team' => 'fa fa-users',
        'banner' => 'fa fa-picture-o',
        'gallery' => 'fa fa-image',
        'page' => 'fa fa-newspaper-o',
        'headerImage' => 'fa fa-image',
        'about' => 'fa fa-newspaper-o',
        'committee' => 'fa fa-newspaper-o',

    ],

];