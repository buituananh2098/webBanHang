/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    var  editor = CREDITOR.replace('editor',{
        filebrowserUploadMethod: "form",
        filebrowserImageUploadUrl: "/public/uploads/upload.php?type=image"
    });
    // CKFinder.setupCKEditor(editor);
    // config.filebrowserUploadMethod = "form";
    // config.filebrowserImageUploadUrl = "/public/uploads/upload.php?type=image";
    // config.extraPlugins = "imagebrowser,filebrowser";
	// config.filebrowserBrowseUrl = 'http://att.lc/ckfinder/ckfinder.html';
	// config.filebrowserImageBrowseUrl = 'http://att.lc/ckfinder/ckfinder.html?type=Images';
	// config.filebrowserFlashBrowseUrl = 'http://att.lc/ckfinder/ckfinder.html?type=Flash';
	// config.filebrowserUploadUrl = 'http://att.lc/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	// config.filebrowserImageUploadUrl = 'http://att.lc/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	// config.filebrowserFlashUploadUrl = 'http://att.lc/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
