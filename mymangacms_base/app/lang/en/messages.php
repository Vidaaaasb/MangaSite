<?php

return [
    /********************************/
    /*****    Administration	*****/
    /********************************/
	
    /** Layout: Menu and header **/
    'admin.layout.site-name'                    => ':sitename - Administration',
    'admin.layout.user-profile'                 => 'User Profile',
    'admin.layout.settings'                     => 'Settings',
    'admin.layout.logout'                       => 'Logout',
    'admin.layout.dashboard'                    => 'Dashboard',
    'admin.layout.manage-manga'                 => 'Manage Manga',
    'admin.layout.manga-list'                   => 'Manga List',
    'admin.layout.hotmanga'                     => 'Hot Manga',
    'admin.layout.categories'                   => 'Categories',   
    'admin.layout.general'                      => 'General',
    'admin.layout.seo'                          => 'SEO',
    'admin.layout.themes'                       => 'Themes',
    
    /** Dashboard **/
    'admin.dashboard.hotmanga'                  => 'Hot Manga',
    'admin.dashboard.edit-hotlist'              => 'Edit Hot list',
    'admin.dashboard.hotlist-empty'             => 'The hot list is empty !',
    'admin.dashboard.latest-added-manga'        => 'Latest added Manga',
    'admin.dashboard.create-manga'              => 'Create a new Manga',
    'admin.dashboard.view-all-manga'            => 'View All Manga',
    'admin.dashboard.no-manga'                  => 'There is no Manga !',
    'admin.dashboard.latest-added-chapter'      => 'Latest added chapters',
    'admin.dashboard.no-chapter'                => 'There is no chapter !',
    
    /** Categories **/
    'admin.category.categories'            	=> 'Categories',
    'admin.category.name'                  	=> 'Category name',
    'admin.category.slug'                  	=> 'Slug',
    'admin.category.slug-placeholder'      	=> 'must be unique, without spaces',
    'admin.category.back'                  	=> 'Back',
    'admin.category.create-category'       	=> 'Create category',
    'admin.category.update-category'       	=> 'Update category',
    'admin.category.edit'                  	=> 'edit',
    'admin.category.delete'                	=> 'delete',
    'admin.category.no-category'           	=> 'There is no category !',
    'admin.category.confirm-delete'           	=> 'Are you sure to delete this category?',
    
    /** Manga **/
    'admin.manga.list'                     	=> 'Manga list',
    'admin.manga.create'                   	=> 'Create a new Manga',
    'admin.manga.actions'                  	=> 'Actions',
    'admin.manga.edit-manga'               	=> 'Edit Manga',
    'admin.manga.delete-manga'             	=> 'Delete Manga',
    'admin.manga.create-manga'             	=> 'Create Manga',
    'admin.manga.back'                     	=> 'Back',
    'admin.manga.confirm-delete'                => 'Are you sure to delete this Manga and all chapters?',
    
    'admin.manga.detail.status'            	=> 'Status:',
    'admin.manga.detail.other-names'       	=> 'Other names:',
    'admin.manga.detail.author'            	=> 'Author(s):',
    'admin.manga.detail.released'          	=> 'Released:',
    'admin.manga.detail.categories'        	=> 'Categories:',
    'admin.manga.detail.summary'           	=> 'Summary:',
    'admin.manga.detail.caution'           	=> 'Violent Content',
	
    'admin.manga.chapters'                 	=> ':manganame: Chapters',
    'admin.manga.create-chapter'           	=> 'Create new chapter',
    'admin.manga.chapter-number'           	=> '#',
    'admin.manga.chapter-name'             	=> 'Chapter name',
    'admin.manga.created'                  	=> 'Created',
    'admin.manga.owner'                         => 'Owner',
	
    'admin.manga.create.manga-name'        	=> 'Manga name',
    'admin.manga.create.manga-slug'        	=> 'Slug',
    'admin.manga.create.slug-placeholder'  	=> 'must be unique, without spaces',
    'admin.manga.create.comma-separated'   	=> 'Separeted by comma',
    'admin.manga.create.status'            	=> 'Status',
    'admin.manga.create.other-names'       	=> 'Other names',
    'admin.manga.create.author'            	=> 'Author(s)',
    'admin.manga.create.released'          	=> 'Date of release',
    'admin.manga.create.categories'        	=> 'Categories',
    'admin.manga.create.categories-title'  	=> 'Choose one or many categories',
    'admin.manga.create.summary'           	=> 'Summary',
    'admin.manga.create.filename'           	=> 'filename:',
    'admin.manga.create.size'           	=> 'size:',
    'admin.manga.create.upload-cover'          	=> 'Upload an image cover',
    'admin.manga.create.remove-cover'          	=> 'Remove this image cover',
    
    'admin.manga.edit.title'                    => 'Edit Manga',
    'admin.manga.edit.update-manga'             => 'Update Manga',
    'admin.manga.edit'                          => 'edit',
    
    'admin.manga.hot.title'                     => 'Create your Hot Manga list',
    'admin.manga.hot.notice'                    => 'Hot list is the list displayed with large thumbnail in the home page.',
    'admin.manga.hot.manga-list'                => 'Manga List',
    'admin.manga.hot.hot-list'                  => 'Hot List',
    'admin.manga.hot.save'                      => 'Save hot list',
    
    /** Chapter **/
    'admin.chapter.create'                      => 'New chapter',
    'admin.chapter.create.title'                => 'Create a new Chapter',
    'admin.chapter.create.chapter-name'    	=> 'Chapter name',
    'admin.chapter.create.number'      		=> 'Number',
    'admin.chapter.create.slug'        		=> 'Slug',
    'admin.chapter.create.slug-placeholder'	=> 'must be unique, without spaces',
    'admin.chapter.create.volume'               => 'Volume',
    'admin.chapter.back'          		=> 'Back',
    'admin.chapter.create.create-chapter' 	=> 'Create Chapter',
	
    'admin.chapter.edit'                        => 'Chapter #:number',
    'admin.chapter.edit.title' 			=> 'Edit chapter',
    'admin.chapter.edit.update-chapter' 	=> 'Update Chapter',
    'admin.chapter.edit.chapter-info' 		=> 'Chapter #:number: :name',
    'admin.chapter.edit.add-pages' 		=> 'Add Pages',
    'admin.chapter.edit.upload-zip' 		=> 'Upload Zip file',
    'admin.chapter.edit.upload-images' 		=> 'Upload Images',
    'admin.chapter.edit.grap-sites' 		=> 'Grab from other sites',
    'admin.chapter.edit.delete-chapter'		=> 'Delete chapter',
    'admin.chapter.edit.confirm-delete' 	=> 'Are you sure to delete this chapter?',
    'admin.chapter.edit.zip-error'	 	=> 'Please select the zip file that you want to upload, The Zip file must contain only images.',
    'admin.chapter.edit.upload'	 		=> 'Upload',
    'admin.chapter.edit.add-image-urls'	 		=> 'Enter one or many images URL (one per line)',
    'admin.chapter.edit.confirm-delete-page' 	=> 'Are you sure to delete this page?',
    'admin.chapter.edit.create-pages' 			=> 'Create pages',
	
    'admin.chapter.edit.page-number' 		=> '#',
    'admin.chapter.edit.page-scan' 		=> 'Scan',
    'admin.chapter.edit.page-filename' 		=> 'Filename',
    'admin.chapter.edit.page-slug' 		=> 'Slug',
    'admin.chapter.edit.page-action'  		=> 'Action',
    'admin.chapter.edit.delete-page'  		=> 'delete page',
    'admin.chapter.edit.no-page'  		=> 'There is no Scan !',
    'admin.chapter.edit.manually'               => 'Manually',
    
    'admin.chapter.page.title'  		=> 'Upload one or multiple images',
    'admin.chapter.page.back'  			=> 'Back to chapter',
    'admin.chapter.page.add-images'  		=> 'Add Images',
    'admin.chapter.page.upload-save'  		=> 'Start upload & Save',
    'admin.chapter.page.start'  		=> 'Start',
    'admin.chapter.page.delete'  		=> 'Delete',

    'admin.chapter.scraper.title'               => 'Grab Manga chapter from others websites',
    'admin.chapter.scraper.select-source'       => 'Select your Scan Manga source',
    'admin.chapter.scraper.chapter-url'         => 'Chapter URL',
    'admin.chapter.scraper.start'               => 'Start Scraping',
    'admin.chapter.scraper.header-number'       => '#',
    'admin.chapter.scraper.header-scan'         => 'Scan',
    'admin.chapter.scraper.header-name'         => 'Filename',
    'admin.chapter.scraper.header-url'          => 'URL',
    'admin.chapter.scraper.one-many-urls'       => 'Enter one or many chapters URL (one per line)',
    'admin.chapter.scraper.total-progress'      => 'Total Progress',

    /** Settings **/
    'admin.settings'				=> 'Settings',
	
    'admin.settings.general'			=> 'General',
    'admin.settings.general.header'		=> 'General informations about your site',
    'admin.settings.general.select-lang'	=> 'Change the language of your site:',
    'admin.settings.general.site-name'		=> 'Site Name:',
    'admin.settings.general.slogan'		=> 'Slogan:',
    'admin.settings.general.description'	=> 'Description:',
    'admin.settings.general.site-orientation'   => 'Select the site orientation',
    'admin.settings.general.orientation-rtl'    => 'Right-To-Left',
    'admin.settings.general.orientation-ltr'    => 'Left-To-Right',
    
    'admin.settings.seo'			=> 'SEO',
    'admin.settings.seo.header'			=> 'Search Engin Optimization',
    'admin.settings.seo.title'			=> 'Title:',
    'admin.settings.seo.keywords'		=> 'Keywords:',
    'admin.settings.seo.description'		=> 'Description:',
    'admin.settings.seo.ga-id'			=> 'Google Analytics ID:',
    'admin.settings.seo.gw-id'			=> 'Google Webmaster ID:',

    'admin.settings.profile'			=> 'User Profile',
    'admin.settings.profile.header'		=> 'User Profile',
    'admin.settings.profile.name'		=> 'Name:',
    'admin.settings.profile.username'		=> 'Username:',
    'admin.settings.profile.pwd'		=> 'Password:',
    'admin.settings.profile.email'		=> 'Email:',

    'admin.settings.theme'			=> 'Themes',
    'admin.settings.theme.header'		=> 'Themes',
    'admin.settings.theme.select-theme'		=> 'Select your theme',
    
    // Manga options
    'admin.layout.options'                      => 'Manga Options',
    'admin.settings.manga.allow-duplicate-chapter'  => 'Allow duplicate chapters',
    'admin.settings.manga.allow-download-chapter'   => 'Allow downloading chapters from frontpage',
    'admin.settings.manga.show-contributer-pseudo'  => 'Show contributer on frontpage',
    
    // Ad placements
    'admin.settings.ads.manage-ads'             => 'Manage Ads',
    'admin.settings.ads.ad-blocks'              => 'Ad Blocks',
    'admin.settings.ads.ad-placements'          => 'Ad Placements',
    'admin.settings.ads.block'                  => 'Block: ',
    'admin.settings.ads.block-id'               => 'Block identifier',
    'admin.settings.ads.block-code'             => 'Your code here',
    'admin.settings.ads.add-block'              => 'Add new ad-bloc',
    'admin.settings.ads.reader-page'            => 'Reader Page',
    'admin.settings.ads.homepage'               => 'HomePage',
    'admin.settings.ads.info-page'              => 'Manga Info Page',
    'admin.settings.ads.save-all-placements'    => 'Save All Placements',

    'admin.settings.save'			=> 'Save',
    'admin.settings.update'			=> 'Update',
    
    /** Manage Users **/
    'admin.users.manage-users'                  => 'Manage Users',
    'admin.users.permissions'                   => 'Permissions',
    'admin.users.permission'                    => 'Permission',
    'admin.users.slug'				=> 'Slug',
    'admin.users.roles'                         => 'Roles',
    'admin.users.roles.role'                    => 'Role',
    'admin.users.roles.add'                     => 'Add new role',
    'admin.users.roles.edit'                    => 'Edit Role',
    'admin.users.roles.create'                  => 'Create Role',
    'admin.users.roles.role-name'               => 'Role name',
    'admin.users.roles.select-perms'            => 'Add permissions to your role:',
    'admin.users.roles.role-perms'              => 'Role permissions',

    'admin.users.users'                         => 'Users',
    'admin.users.email'                         => 'E-mail',
    'admin.users.username'                      => 'Username',
    'admin.users.status'                        => 'Status',
    'admin.users.roles'                         => 'Roles',
    'admin.users.manga'                         => 'N° Manga',
    'admin.users.chapters'                      => 'N° Chapters',
    'admin.users.add'                           => 'Add new user',
    'admin.users.create'                        => 'Create User',
    'admin.users.account-status'		=> 'Account status:',
    'admin.users.enabled'                       => 'Enabled',
    'admin.users.disabled'                      => 'Disabled',
    'admin.users.select-roles'                  => 'Add roles to the new user:',
    'admin.users.user-roles'                    => 'User roles',
    'admin.users.edit-user'                     => 'Edit User',
	
    'admin.users.roles.confirm-delete'          => 'Are you sure to delete this Role?',
    'admin.users.confirm-delete'                => 'Are you sure to delete this User? All his Chapters & Manga will be assigned to Admin',

    'admin.users.edit'                          => 'edit',
    'admin.users.delete'                        => 'delete',
	
    'admin.users.user.create-success'           => 'User has been successfully created!',
    'admin.users.user.update-success'           => 'User has been successfully updated!',
    'admin.users.role.create-success'           => 'Role has been successfully created!',
    'admin.users.role.update-success'           => 'Role has been successfully updated!',

    'admin.users.options'                       => 'Subscription Options',
    'admin.users.options.new-account'           => 'For new created Account:',
    'admin.users.options.admin-activate-it'     => 'Member needs to be confirmed:',
    'admin.users.options.send-confim-email'     => 'Send E-mail confirmation:',
    'admin.users.options.default-role'          => 'Default Role',
    'admin.users.options.mail-conf'             => 'Mail configuration used by "forgot password" and "account creation" actions:',
    'admin.users.options.use-php-mail'          => 'Use PHP Mail (Enabled by most Hosting providers)',
    'admin.users.options.config-smtp'           => 'Configure SMTP server',
    'admin.users.options.host'                  => 'host',
    'admin.users.options.port'                  => 'port',
    'admin.users.options.username'              => 'username',
    'admin.users.options.password'              => 'password',
    'admin.users.options.address'               => 'Email address that will be displayed in the sent email',
    'admin.users.options.name'                  => 'The name that will be displayed in the sent email (e.g. Your website name)',
    'admin.users.options.allo-subscribe'        => 'Allow users to subscribe to my website',
    
    'admin.users.options.yes'                   => 'Yes',
    'admin.users.options.no'                    => 'No',
    
    /** Messages **/
    'admin.settings.update.success'		=> 'Settings has been successfully updated!',
    'admin.settings.update.profile-success'	=> 'Profile has been successfully updated!',
    
    'admin.category.create-success'             => 'Category has been successfully created!',
    'admin.category.update-success'             => 'Category has been successfully updated!',
    'admin.category.delete-success'             => 'Category has been successfully deleted!',
    
    'admin.chapter.update-success'              => 'Chapter has been successfully updated!',
    'admin.chapter.page.create-success'         => 'Pages has been successfully created!',
    'admin.chapter.page.select-zip-error'       => 'Please select a ZIP file.',
    'admin.chapter.page.select-file-error'      => 'Please select a file.',
    
    'admin.manga.create.choose-status'          => 'Choose Status',
    'admin.manga.hot.update-success'            => 'The list has been successfully updated!',
        
    /********************************/
    /*****      Frontpage       *****/
    /********************************/
	
    /** Menu **/
    'front.menu.home' 				=> 'Home',
    'front.menu.manga-list' 			=> 'Manga list',
    'front.menu.random-manga'                   => 'Random Manga',
    'front.menu.search'                         => 'Search...',
    'front.menu.bookmarks'                      => 'My Bookmark',

    /** Home **/
    'front.home.title' 				=> ':sitename | Home',
    'front.home.latest-manga' 			=> 'Latest Manga Updates',
    'front.home.hot' 				=> 'hot',
    'front.home.no-chapter'          		=> 'There is no chapter !',
    'front.home.hot-updates'          		=> 'Hot Manga Updates',
    'front.home.about-manga'          		=> 'About Manga',
    'front.home.read-chapter'          		=> 'Read chapter',
    'front.home.top-manga'          		=> 'Top Manga',
    'front.home.top10'          		=> 'Top10',
    'front.home.subscribe'          		=> 'Subscribe',
    'front.home.login'          		=> 'Login',
    'front.home.hello-user'          		=> 'Hello :user',
    'front.home.logout'                         => 'Logout',
    'front.home.yesterday'                      => 'Yesterday',
    'front.home.today'                          => 'Today',

    /** Manga Directory **/
    'front.directory.title' 			=> ':sitename | Manga Directory',
    'front.directory.sort-by'                   => 'Sort by:',
    'front.directory.az'                        => 'AZ',
    'front.directory.views'                     => 'Views',
    'front.directory.text-version'              => 'Text version',
    'front.directory.image-version'             => 'Image version',
    'front.directory.browse-category'           => 'Browse Manga by Category',
    'front.directory.browse-alphabetic' 	=> 'Browse Manga by Initial Alphabetic',
    'front.directory.manga-directory' 		=> 'Manga Directory',
    'front.directory.no-manga'                  => 'There is no Manga !',
	
    /** Manga Info **/
    'front.manga.title'              		=> ':manganame Manga',
    'front.manga.status'            		=> 'Status',
    'front.manga.other-names'       		=> 'Other names',
    'front.manga.author'            		=> 'Author(s)',
    'front.manga.released'          		=> 'Date of release',
    'front.manga.categories'        		=> 'Categories',
    'front.manga.summary'           		=> 'Summary',
    'front.manga.rating'                	=> 'Rating',
    'front.manga.chapters'             		=> ':manganame Chapters',
    'front.manga.no-chapter'            	=> 'There is no chapter !',
    'front.manga.note'                          => 'Average :avg/5 out of :votes total votes.',
    'front.manga.caution'            		=> 'Caution: This Manga contain themes or scenes that may not be suitable for very young readers.',
    'front.manga.download'            		=> 'download',
    
    /** Reader **/
    'front.reader.page'                         => 'Page',
    'front.reader.chaptre'                      => 'Chapter',
    'front.reader.prev'                         => '←prev',
    'front.reader.next'                         => 'next→',
    'front.reader.tips'                         => 'Tips:',
    'front.reader.tips-message'                 => 'Click on the <em>:manga :chapter manga</em> image to go to the next page. You can use left and right keyboard keys to browse between pages.',
    'front.reader.first-page-message'           => 'You are already on the First Page.',
    'front.reader.last-page-message'            => 'This is the latest page.',
    'front.reader.no-page'                      => 'no page published yet !!!',
    'front.reader.other-chapter'                => 'Other chapters',
    'front.reader.reading-mode'                 => 'Reading mode',
    'front.reader.page-per-page'                => 'Page by Page',
    'front.reader.all-pages'                    => 'All in one page',
    
    /** Bookmark **/
    'front.bookmarks.title'                     => 'My Bookmarks',
    'front.bookmarks.currently-reading'         => 'Currently Reading',
    'front.bookmarks.completed'                 => 'Completed',
    'front.bookmarks.on-hold'                   => 'On Hold',
    'front.bookmarks.plan-to-read'              => 'Plan to Read',
    'front.bookmarks.all'                       => 'All',
    'front.bookmarks.different-status'          => 'Select a status different from the active one!',
    'front.bookmarks.select-manga'              => 'Select at least one manga!',
    'front.bookmarks.confirm-delete'            => 'Are you sure to delete this Bookmark?',
    'front.bookmarks.status-changed'            => 'Bookmark(s) successfully moved!',
    'front.bookmarks.error'                     => 'An error has occurred, please retry!',
    'front.bookmarks.move'                      => 'move',
    'front.bookmarks.no-bookmark'               => 'There is no Bookmark!',
    'front.bookmarks.bookmark-at'               => 'Bookmarked at',
    'front.bookmarks.bookmark'                  => 'Bookmark',
    'front.bookmarks.bookmarked'                => 'Bookmark added!',
    
    /***** v1.7 *****/
    /** Admin **/
    'admin.manga.create.artist'                 => 'Artist(s)',
    'admin.layout.comic-types'                  => 'Comic types',
    'admin.comictype.types'                     => 'Comic types',
    'admin.comictype.label'                     => 'Label',
    'admin.comictype.no-type'                   => 'There is no comic type!',
    'admin.comictype.create-type'               => 'Create type',
    'admin.comictype.edit'                      => 'edit',
    'admin.comictype.delete'                    => 'delete',
    'admin.comictype.update-type'               => 'Update type',
    'admin.comictype.confirm-delete'            => 'Are you sure you want to delete this type?',
    'admin.comictype.create-success'            => 'Comic type has been successfully created!',
    'admin.comictype.update-success'            => 'Comic type has been successfully updated!',
    'admin.comictype.delete-success'            => 'Comic type has been successfully deleted!',
    'admin.posts.confirm-delete'                => 'Are you sure you want to delete this post?',
    'admin.posts.manage'			=> 'Manage posts',
    'admin.posts.posts'                         => 'Posts',
    'admin.posts.create'			=> 'Add new post',
    'admin.posts.owner'				=> 'Post author',
    'admin.posts.title'				=> 'Title',
    'admin.posts.published'			=> 'Created',
    'admin.posts.status'			=> 'Status',
    'admin.posts.status-published'		=> 'Published',
    'admin.posts.status-disabled'		=> 'Draft',
    'admin.posts.related-to'			=> 'Related to',
    'admin.posts.save'				=> 'Publish',
    'admin.posts.save-draft'			=> 'Save as draft',
    'admin.posts.edit'				=> 'Edit post',
    'admin.settings.info'                       => 'Site info',
    'admin.settings.pagination'                 => 'Pagination',
    'admin.settings.general.pagination-homepage'        => 'Homepage: Latest chapters',
    'admin.settings.general.pagination-mangalist'       => 'Page: Manga list',
    'admin.settings.general.pagination-latest-release'  => 'Page: Latest release',
    'admin.settings.general.pagination-news-homepage'   => 'Hompage: Latest news',
    'admin.settings.general.pagination-newslist'        => 'Page: Latest news',
    'admin.settings.menu'                       => 'Menu',
    'admin.settings.menu.show-home-menu'        => 'Home',
    'admin.settings.menu.show-mangalist-menu'   => 'Manga list',
    'admin.settings.menu.show-latest-release-menu'     => 'Latest release',
    'admin.settings.menu.show-news-menu'        => 'News',
    'admin.settings.menu.show-random-menu'      => 'Random',
    'admin.settings.menu.add-custom-url'        => 'Add custom URL',
    'admin.settings.comment'                    => 'Comments',
    'admin.settings.comment.system'             => 'Comment system:',
    'admin.settings.comment.show-on-page'       => 'Add comments on page:',
    'admin.settings.comment.news-page'          => 'News',
    'admin.settings.comment.manga-page'         => 'Manga info page',
    'admin.settings.comment.reader-page'        => 'Reader',
    'admin.settings.reader'                     => 'Reader',
    'admin.settings.general.reader-type'        => 'Reader type',
    'admin.settings.general.reader-type-all'    => 'All in one page',
    'admin.settings.general.reader-type-ppp'    => 'Page per page',
    'admin.settings.manga.show-chapters-volume' => 'Show chapters by volume',
    'admin.chapter.scraper.notif-users'         => 'Notify Users',
    'admin.chapter.scraper.notif-users-message' => 'A notification, indicating that new chapters were added, will be sent to users with this manga as favorite?',
    'admin.chapter.scraper.notif-users.notify'  => 'Notify',

    /** Front **/
    'front.manga.artist'                        => 'Artist(s)',
    'front.manga.type'                          => 'Type',
    'front.home.no-news'                        => 'There is no news',
    'front.home.news'				=> 'News',
    'front.home.latest-release'			=> 'Latest release', 
    'front.home.dashboard'          		=> 'Dashboard', 
    'front.myprofil.add-manga-chapter'		=> 'Add Manga/Chapter',
    'front.myprofil.add-post'          		=> 'Add post',              
    'front.myprofil.bookmarks-notification'	=> 'Send me notifications when a new chapter is published',
    'front.reader.report-broken-image'          => 'report broken image',
    'front.reader.email'                        => 'email',
    'front.reader.message'                      => 'message',
    'front.reader.send'                         => 'send',
    'front.reader.close'                        => 'close',
    'front.reader.image-broken'                 => ':image broken, reported by :email',
    'front.reader.sentSuccess'                  => 'Message sent!',
    'front.home.rss-feed'                       => 'RSS feed',
    'front.home.contact-us'                     => 'Contact us',
    'front.home.contact.sentSuccess'            => 'Your message was sent successfully.',
    'front.home.contact.info'                   => 'Want to get in touch with us? Fill out the form below to send us a message and we will try to get back to you ASAP!',
    'front.home.contact.name'                   => 'Name',
    'front.home.contact.email'                  => 'Email',
    'front.home.contact.subject'                => 'Subject',
    'front.home.contact.send'                   => 'send',
    'front.home.contact.from'                   => 'Email from :name',
    
    // email notif
    'email.notif.greetings'                     => 'Hello :name',
    'email.notif.body'                          => 'We want to let you know that :manga chapter :chapter is now available at:',
    'email.notif.body.bulk-update'              => 'We want to let you know that new chapter(s) of :manga are added at:',
    'email.notif.best-regards'                  => 'Best regards',
    
    /***** v1.8 *****/
    /** Admin **/
    'admin.settings.menu.show-adv-search-menu'  => 'Advanced Search',
    'admin.settings.seo.global'                 => 'Global',
    'admin.settings.seo.advanced'               => 'Advanced',
    'admin.settings.seo.use-global'             => ' use global',
    'admin.settings.seo.desc-info'              => ' extract first 250 chars',
    'admin.settings.seo.desc-info-max'              => ' 250 chars max',
    'admin.settings.seo.info-page'              => 'Manga Info Page',
    'admin.settings.seo.reader-page'            => 'Reader Page',
    'admin.settings.seo.news-page'              => 'News Page',
    'admin.settings.seo.mangalist-page'         => 'Manga List Page',
    'admin.settings.seo.latestnews-page'        => 'Latest News Page',
    'admin.settings.seo.latestrelease-page'     => 'Latest Release Page',
    'admin.settings.seo.available-vars'         => 'Available variables to use in the meta and titles:',
    'admin.settings.seo.available-vars.reader'  => 'Variables to use in the reader, in addition to variables above:',
    'admin.settings.seo.available-vars.news'    => 'Available variables to use in the meta and titles:',
    
    'admin.settings.widgets'                    => 'Widgets',
    'admin.settings.widgets.select-widgets'     => '-- Select widgets to show in the frontpage --',
    'admin.settings.widgets.site_description'   => 'Site Description',
    'admin.settings.widgets.social_buttons'     => 'Social Buttons',
    'admin.settings.widgets.top_rates'          => 'Top by rates',
    'admin.settings.widgets.top_views'          => 'Top by views',
    'admin.settings.widgets.custom_code'        => 'Custom/HTML code',
    'admin.settings.widgets.add-widget'         => 'add widget',
    'admin.settings.widgets.site_description.header'=> 'Site Description (editable in "General Settings")',
    'admin.settings.widgets.social_buttons.header'  => 'Social Buttons (Facebook / Google+ / Twitter Counters)',
    'admin.settings.widgets.top_rates.header'   => 'Top Rating',
    'admin.settings.widgets.top_views.header'   => 'Top Views',
    'admin.settings.widgets.custom_code.header' => 'Custom/HTML code',
    
    'admin.settings.cache'                      => 'Cache',
    'admin.settings.cache.reader'               => 'Reader/Chapters Cache',
    'admin.settings.cache.reader.help'          => 'Set the number of minutes to cache a Manga Chapter. 0 means don\'t cache (not recommended)',
    'admin.settings.cache.clear'                => 'Clear Cache',
    'admin.settings.cache.cleared'              => 'Cache cleared!',
    'admin.settings.downloads.clear'            => 'Clear generat. ZIP for downloads',
    'admin.settings.downloads.cleared'          => 'Downloads cleared!',
    
    
    /** Front **/
    'front.adv-search.title' 			=> ':sitename | Advanced Search',
    'front.home.adv-search'                     => 'Advanced Search',
    'front.adv-search.filtre-cat'               => 'Filter by categories',
    'front.adv-search.filtre-cat.ph'            => 'Select one or many categories',
    'front.adv-search.filtre-stat'              => 'Filter by status',
    'front.adv-search.filtre-stat.ph'           => 'Select one or many status',
    'front.adv-search.filtre-type'              => 'Filter by types',
    'front.adv-search.filtre-type.ph'           => 'Select one or many types',
    'front.adv-search.filtre-year'              => 'Filter by year of release',
    'front.adv-search.filtre-year.ph'           => 'enter the year of release',
    'front.adv-search.filtre-author'            => 'Filter by author',
    'front.adv-search.filtre-author.ph'         => 'enter the author name',
    'front.adv-search.search'                   => 'search',
    'front.adv-search.search-result'            => 'Search Result',
    'front.myprofil.my-profil'              	=> 'My Profile',
    'front.myprofil.edit-my-profil'             => 'edit my profile',
    'front.myprofil.edit'                       => 'edit',
    'front.myprofil.member-since'              	=> 'Member since',
    'front.myprofil.upload-avatar'              => 'upload avatar',
    'front.myprofil.delete-avatar'              => 'delete avatar',
    
    'front.home.top-manga-views'                => 'Top by views',
    
    /***** v1.9 *****/
    /** Admin **/
    'admin.settings.gdrive'                     => 'Google Drive',
    'admin.settings.gdrive.redirect-uri'        => 'Redirect URI',
    'admin.settings.gdrive.client-id'           => 'Client ID',
    'admin.settings.gdrive.client-secret'       => 'Client Secret',
    
    'admin.settings.general.reader-mode'        => 'Reader mode (images are preloaded in the two modes)',
    'admin.settings.general.reader-mode-noreload'  => 'Don\'t reload all the page (good for performance)',
    'admin.settings.general.reader-mode-reload'    => 'Reload all the page (good for ads impression)',
    
    'admin.settings.storage'                    => 'Storage Mode',
    'admin.settings.general.storage-type'       => 'Select how to store chapter images',
    'admin.settings.general.storage-type-server'=> 'Local server',
    'admin.settings.general.storage-type-gdrive'=> 'Google Drive',
    'admin.settings.general.storage-type-mirror'=> 'Copy URLs without downloading images (Used only for scraper mode)',
    
    'admin.chapter.scraper.storage-mode.gdrive' => '<b>Storage Mode:</b> Google Drive (May take more time to complete).',
    'admin.chapter.scraper.storage-mode.mirror' => '<b>Storage Mode:</b> Copy URLs without downloading images.',
    'admin.chapter.scraper.storage-mode.server' => '<b>Storage Mode:</b> Local server.',
    
    'admin.manga.tags'                          => 'Tags',
    'admin.manga.create.tags'                   => 'Tags',
    
    'admin.chapter.edit.delete-chapters'        => 'Delete chapters',
    'admin.chapter.edit.confirm-delete-chapters'=> 'Are you sure to delete selected chapters?',
    'admin.chapter.edit.delete-pages'           => 'Delete pages',
    'admin.chapter.edit.confirm-delete-pages'   => 'Are you sure to delete selected pages?',
    
    /** Front **/
    'front.manga.tags'                          => 'Tags',
    'front.directory.browse-tags'               => 'Browse Manga By Tags',
    'front.reader.prevChap'                     => '←prev chapter',
    'front.reader.nextChap'                     => 'next chapter→',
    
    'front.home.comments'			=> 'Comments',
    'front.home.add-comment'			=> 'add comment',
    'front.home.add-comment-cancel'		=> 'cancel',
    'front.home.connect-to-comment'		=> 'please log-in to comment...',
    'front.home.comment-reply'                  => 'reply',
    'front.home.comment.builtin-tab'            => 'Built-in',
];
