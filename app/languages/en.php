<?php

return array(
  'title' => 'English',
  'direction' => 'ltr',
  'author' => 'Bastian Allgeier <bastian@getkirby.com>',
  'version' => '1.0.1',
  'data' => array(

    // global
    'cancel' => 'Cancel',
    'add' => 'Add',
    'save' => 'Save',
    'saved' => 'Saved!',
    'change' => 'Change',
    'delete' => 'Delete',
    'insert' => 'Insert',
    'ok' => 'Ok',

    // options (sidebar)
    'options.show' => 'Show options',
    'options.hide' => 'Hide options',

    // installation
    'installation' => 'Installation',
    'installation.check.headline' => 'Kirby Panel Installation',
    'installation.check.text' => 'Kirby encountered the following issues during installation…',
    'installation.check.retry' => 'Retry',
    'installation.check.error' => 'There are some issues!',
    'installation.check.error.accounts' => '/site/accounts is not writable',
    'installation.check.error.avatars' => '/assets/avatars is not writable',
    'installation.check.error.blueprints' => 'Please add a /site/blueprints folder',
    'installation.check.error.content' => 'The content folder and all contained files and folders must be writable.',
    'installation.check.error.thumbs' => 'The thumbs folder must be writable.',
    'installation.signup.username.label' => 'Create your first account',
    'installation.signup.username.placeholder' => 'Username',
    'installation.signup.email.label' => 'Email',
    'installation.signup.email.placeholder' => 'mail@example.com',
    'installation.signup.password.label' => 'Password',
    'installation.signup.language.label' => 'Language',
    'installation.signup.button' => 'Create your account',

    // login
    'login' => 'Login',
    'login.welcome' => 'Please sign in with your new account',
    'login.username.label' => 'Username',
    'login.password.label' => 'Password',
    'login.error' => 'Invalid username or password',
    'login.button' => 'Login',

    // logout
    'logout' => 'Logout',

    // dashboard
    'dashboard' => 'Dashboard',
    'dashboard.index.pages.title' => 'Pages',
    'dashboard.index.pages.edit' => 'Edit',
    'dashboard.index.pages.add' => 'Add',
    'dashboard.index.site.title' => 'Your site\'s URL',
    'dashboard.index.account.title' => 'Your account',
    'dashboard.index.account.edit' => 'Edit',
    'dashboard.index.metatags.title' => 'Site options',
    'dashboard.index.metatags.edit' => 'Edit',
    'dashboard.index.history.title' => 'Your last updates',
    'dashboard.index.history.text' => 'Your last modified pages will be displayed here to make it easy to find them again later.',
    'dashboard.index.license.title' => 'Kirby license',

    // metatags
    'metatags' => 'Site options',
    'metatags.info' => 'Kirby info',
    'metatags.license' => 'Kirby license',
    'metatags.version.toolkit' => 'Toolkit version',
    'metatags.version.kirby' => 'Kirby version',
    'metatags.version.panel' => 'Panel version',
    'metatags.back' => 'Back to the dashboard',
    'metatags.files' => 'Site files',

    // pages
    'pages.show.settings' => 'Page settings',
    'pages.show.preview' => 'Open preview',
    'pages.show.changeurl' => 'Change URL',
    'pages.show.invisible' => 'Status: invisible',
    'pages.show.visible' => 'Status: visible',
    'pages.show.changes.text' => 'You have unsaved changes!',
    'pages.show.changes.button' => 'Discard',
    'pages.show.delete' => 'Delete this page',
    'pages.show.subpages.title' => 'Pages',
    'pages.show.subpages.edit' => 'Edit',
    'pages.show.subpages.add' => 'Add',
    'pages.show.subpages.empty' => 'This page has no subpages',
    'pages.show.files.title' => 'Files',
    'pages.show.files.edit' => 'Edit',
    'pages.show.files.add' => 'Add',
    'pages.show.files.empty' => 'This page has no files',
    'pages.show.error.permissions.title' => 'The page is not writable',
    'pages.show.error.permissions.text'  => 'Please check the permissions for the content folder and all files.',
    'pages.show.error.permissions.retry'  => 'Retry',
    'pages.show.error.notitle.title' => 'The blueprint does not have a title field',
    'pages.show.error.notitle.text' => 'Please add a title field and try again',
    'pages.show.error.notitle.retry' => 'Retry',
    'pages.show.error.form'  => 'Please fill in all fields correctly',

    'pages.add.title.label' => 'Add a new page',
    'pages.add.title.placeholder' => 'Title',
    'pages.add.url.label' => 'URL-appendix',
    'pages.add.url.enter' => '(enter your title)',
    'pages.add.url.close' => 'Close',
    'pages.add.url.help' => 'Format: lowercase a-z, 0-9 and regular dashes',
    'pages.add.template.label' => 'Template',
    'pages.add.error.title' => 'The title is missing',
    'pages.add.error.template' => 'The template is missing',
    'pages.add.error.max.headline' => 'No new pages allowed',
    'pages.add.error.max.text' => 'The maximum number of subpages for the current page has been reached.',
    'pages.url.uid.label' => 'URL-appendix',
    'pages.url.uid.label.option' => 'Create from title',
    'pages.url.error.exists' => 'A page with the same appendix already exists',
    'pages.url.error.move' => 'The appendix could not be changed',
    'pages.toggle.position' => 'Position',
    'pages.toggle.invisible' => 'invisible',
    'pages.toggle.publish' => 'Do you really want to change the status of this page to **visible?**',
    'pages.toggle.hide' => 'Do you really want to change the status of this page to **invisible?**',
    'pages.delete.headline' => 'Do you really want to delete this page?',
    'pages.delete.error.home.headline' => 'The home page cannot be deleted',
    'pages.delete.error.home.text' => 'You are trying to delete the home page. This is not possible and would lead to unwanted effects.',
    'pages.delete.error.error.headline' => 'The error page cannot be deleted',
    'pages.delete.error.error.text' => 'You are trying to delete the error page. This is not possible and would lead to unwanted effects.',
    'pages.delete.error.children.headline' => 'The page cannot be deleted',
    'pages.delete.error.children.text' => 'This page has subpages and cannot be deleted. Please delete all subpages first.',
    'pages.delete.error.blocked.headline' => 'The page cannot be deleted',
    'pages.delete.error.blocked.text' => 'This page is locked and cannot be deleted.',
    'pages.search.help' => 'Search pages by URL. Navigate through search results with your up and down arrow keys and hit enter to jump to the selected page.',
    'pages.search.noresults' => 'There are no search results for your query. Please try again with a different URL.',
    'pages.error.missing' => 'The page could not be found',

    // subpages
    'subpages' => 'Pages',
    'subpages.index.headline' => 'Pages in',
    'subpages.index.back' => 'Back',
    'subpages.index.add' => 'Add a new page',
    'subpages.index.add.first.text' => 'This page has no subpages yet',
    'subpages.index.add.first.button' => 'Add the first page',
    'subpages.index.visible' => 'Visible pages',
    'subpages.index.visible.help' => 'Drag invisible pages here to sort them/make them visible.',
    'subpages.index.invisible' => 'Invisible pages',
    'subpages.index.invisible.help' => 'Drag visible pages here to unsort them/make them invisible.',
    'subpages.error.missing' => 'The page could not be found',

    // files
    'files' => 'Files',
    'files.index.headline' => 'Files for',
    'files.index.back' => 'Back',
    'files.index.upload' => 'Upload a new file',
    'files.index.upload.first.text' => 'This page has no files yet',
    'files.index.upload.first.button' => 'Upload the first file',
    'files.index.edit' => 'Edit',
    'files.index.delete' => 'Delete',
    'files.show.name.label' => 'Filename',
    'files.show.info.label' => 'Type / Size / Dimensions',
    'files.show.link.label' => 'Public link',
    'files.show.open' => 'Show/download file',
    'files.show.back' => 'Back',
    'files.show.replace' => 'Replace',
    'files.show.delete' => 'Delete',
    'files.show.error.rename' => 'The file could not be renamed',
    'files.show.error.form' => 'Please fill in all fields correctly',
    'files.upload.drop' => 'Drop files here…',
    'files.upload.click' => '…or click to upload',
    'files.replace.drop' => 'Drop a file here…',
    'files.replace.click' => '…or click to replace',
    'files.replace.error.type' => 'The uploaded file must have the same file type',
    'files.delete.headline' => 'Do you really want to delete this file?',
    'files.error.missing.page' => 'The page could not be found',
    'files.error.missing.file' => 'The file could not be found',

    // users
    'users' => 'Users',
    'users.index.headline' => 'All users',
    'users.index.add' => 'Add a new user',
    'users.index.edit' => 'Edit',
    'users.index.delete' => 'Delete',
    'users.form.username.label' => 'Username',
    'users.form.username.placeholder' => 'Your username',
    'users.form.username.help' => 'Allowed characters: lowercase a-z, 0-9 and dashes',
    'users.form.username.readonly' => 'The username cannot be changed',
    'users.form.firstname.label' => 'First name',
    'users.form.lastname.label' => 'Last name',
    'users.form.email.label' => 'Email',
    'users.form.email.placeholder' => 'mail@example.com',
    'users.form.password.label' => 'Password',
    'users.form.password.confirm.label' => 'Confirm password',
    'users.form.password.new.label' => 'New password',
    'users.form.password.new.confirm.label' => 'Confirm the new password',
    'users.form.password.new.help' => 'Leave blank to keep the current password',
    'users.form.language.label' => 'Language',
    'users.form.role.label' => 'Role',
    'users.form.options.headline' => 'Account options',
    'users.form.options.message' => 'Send email',
    'users.form.options.delete' => 'Delete account',
    'users.form.avatar.headline' => 'Profile picture',
    'users.form.avatar.upload' => 'Upload profile picture',
    'users.form.avatar.replace' => 'Replace profile picture',
    'users.form.avatar.delete' => 'Delete profile picture',
    'users.form.back' => 'Back to users',
    'users.form.error.password.confirm' => 'Please confirm the password',
    'users.form.error.update' => 'The user could not be updated',
    'users.form.error.create' => 'The user could not be created',
    'users.form.error.permissions.title' => 'The account folder is not writable',
    'users.form.error.permissions.text' => 'Please make sure that /site/accounts exists and is writable.',
    'users.delete.headline' => 'Do you really want to delete this user?',
    'users.delete.error' => 'The user could not be deleted',
    'users.avatar.drop' => 'Drop a profile picture here…',
    'users.avatar.click' => '…or click to upload',
    'users.avatar.error.type' => 'You can only upload JPG, PNG and GIF files',
    'users.avatar.error.folder.headline' => 'The avatar folder is not writable',
    'users.avatar.error.folder.text' => 'Please create the folder <strong>/assets/avatars</strong> and make it writable to upload profile pictures.',
    'users.avatar.delete.error' => 'The profile picture could not be deleted',
    'users.avatar.delete.success' => 'The profile picture has been deleted',
    'users.error.missing' => 'The user could not be found',

    // form fields
    'fields.required' => 'Required',
    'fields.date.label' => 'Date',
    'fields.date.months' => array(
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December'
    ),
    'fields.date.weekdays' => array(
      'Sunday',
      'Monday',
      'Tuesday',
      'Wednesday',
      'Thursday',
      'Friday',
      'Saturday'
    ),
    'fields.date.weekdays.short' => array(
      'Sun',
      'Mon',
      'Tue',
      'Wed',
      'Thu',
      'Fri',
      'Sat'
    ),
    'fields.email.label' => 'Email',
    'fields.email.placeholder' => 'mail@example.com',
    'fields.number.label' => 'Number',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Page',
    'fields.page.placeholder' => 'path/to/page',
    'fields.password.label' => 'Password',
    'fields.structure.add' => 'Add',
    'fields.structure.add.first' => 'Add the first entry',
    'fields.structure.empty' => 'No entries yet.',
    'fields.structure.cancel' => 'Cancel',
    'fields.structure.save' => 'Ok',
    'fields.structure.edit' => 'Edit',
    'fields.structure.delete' => 'Delete',
    'fields.structure.delete.label' => 'Do you really want to delete this entry?',
    'fields.tags.label' => 'Tags',
    'fields.tel.label' => 'Phone',
    'fields.textarea.buttons.bold.label' => 'Bold text',
    'fields.textarea.buttons.bold.text' => 'Bold text',
    'fields.textarea.buttons.italic.label' => 'Italic text',
    'fields.textarea.buttons.italic.text' => 'Italic text',
    'fields.textarea.buttons.link.label' => 'Link',
    'fields.textarea.buttons.email.label' => 'Email',
    'fields.textarea.buttons.image.label' => 'Image',
    'fields.textarea.buttons.file.label' => 'File',
    'fields.toggle.yes' => 'Yes',
    'fields.toggle.no' => 'No',
    'fields.toggle.on' => 'On',
    'fields.toggle.off' => 'Off',

    // textarea overlays
    'editor.link.url.label' => 'Insert URL',
    'editor.link.text.label' => 'Link text',
    'editor.link.text.help' => 'The link text is optional',
    'editor.email.address.label' => 'Insert email address',
    'editor.email.address.placeholder' => 'mail@example.com',
    'editor.email.text.label' => 'Link text',
    'editor.email.text.help' => 'The link text is optional',
    'editor.file.empty' => 'This page has no files',
    'editor.image.empty' => 'This page has no images',

    // error page
    'error' => 'Error',
    'error.headline' => 'Error',

  )
);
