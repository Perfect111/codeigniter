<?php

include_once 'includes/db.class.php';



session_start();
if (!isset($_SESSION["UserId"]) || is_null($_SESSION["UserId"])) {
	header("Location: login.php");
	die();
}

  $db = new Db();

$userName=$db->getUserName($_SESSION["UserId"]);

?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Bal - Email Editor</title>
    <meta name="description" lang="en" content="Bal – Email Newsletter Builder - This is a drag & drop email builder plugin based on Jquery and PHP for developer. You can simply integrate this script in your web project and create custom email template with drag & drop">
    <meta name="keywords" lang="en" content="bounce, bulk mailer, campaign, campaign email, campaign monitor, drag & drop email builder, drag & drop email editor, mailchimp, mailer, newsletter, newsletter email, responsive, retina ready, subscriptions, templates">
    <meta name="robots" content="index, follow">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  	<link href="assets/css/demo.css?v=2" rel="stylesheet" />
    <link href="assets/css/email-editor.bundle.min.css?<?php echo rand(10,1000)?>" rel="stylesheet" />
    <link href="assets/css/colorpicker.css" rel="stylesheet" />

		<link href="assets/css/editor-color.css" rel="stylesheet" />
		<!--for bootstrap-tour  -->
		<link rel="stylesheet" href="assets/vendor/bootstrap-tour/build/css/bootstrap-tour.min.css">
		 <link rel="stylesheet" href="assets/vendor/sweetalert2/dist/sweetalert2.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="bal-header">
		<div class="bal-project-container">
			<span class="bal-project-name" contenteditable="true"> </span>
			<a href="javascript:void(0)" class="bal-btn-save">Save</a>
		</div>
		<div class="bal-user-info">

			<div class="bal-user-name">
				<?php echo $userName ?>
			</div>

			<div class="bal-header-controls">
				<a id="bal-button-exit" class="bal-button-exit" href="logout.php">Exit</a>
			</div>
		</div>
	</div>
    <div class="bal-editor-demo">

    </div>
    <div id="previewModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Preview</h4>
            </div>
            <div class="modal-body">
            <div class="">
              <label for="">URL : </label> <span class="preview_url"></span>
            </div>
              <iframe id="previewModalFrame" width="100%" height="400px"></iframe>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
    </div>

    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/vendor/jquery-nicescroll/dist/jquery.nicescroll.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!--for ace editor  -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.01/ace.js" type="text/javascript"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/ace/1.1.01/theme-monokai.js" type="text/javascript"></script>

    <!--for tinymce  -->
    <script src="http://cdn.tinymce.com/4/tinymce.min.js"></script>

 		<script src="assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

    <script src="assets/js/email-editor.bundle.min.js?<?php echo rand(10,1000)?>"></script>
    <!-- <script src="assets/js/bal-email-editor-plugin.js"></script> -->


		<!--for bootstrap-tour  -->
		<script src="assets/vendor/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>


    <script>
        var _is_demo = true;

        function loadImages() {
            $.ajax({
                url: 'get-files.php',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    if (data.code == 0) {
                        _output = '';
                        for (var k in data.files) {
                            if (typeof data.files[k] !== 'function') {
                                _output += "<div class='col-sm-3'>" +
                                    "<img class='upload-image-item' src='" + data.directory + data.files[k] + "' alt='" + data.files[k] + "' data-url='" + data.directory + data.files[k] + "'>" +
                                    "</div>";
                                // console.log("Key is " + k + ", value is" + data.files[k]);
                            }
                        }
                        $('.upload-images').html(_output);
                    }
                },
                error: function() {}
            });
        }

    var _templateListItems;

    var  _emailBuilder=  $('.bal-editor-demo').emailBuilder({
						//new features begin

						showMobileView:true,
						onTemplateDeleteButtonClick:function (e,dataId,parent) {

							$.ajax({
									url: 'delete_template.php',
									type: 'POST',
									data: {
											templateId: dataId
									},
								//	dataType: 'json',
									success: function(data) {
												parent.remove();
									},
									error: function() {}
							});
						},
						//new features end

            lang: 'en',
            elementJsonUrl: 'elements-1.json',
            langJsonUrl: 'lang-1.json',
            loading_color1: 'red',
            loading_color2: 'green',
            showLoading: true,

            blankPageHtmlUrl: 'template-blank-page.html',
            loadPageHtmlUrl: 'template-load-page.html',

            //left menu
            showElementsTab: true,
            showPropertyTab: true,
            showCollapseMenu: true,
            showBlankPageButton: true,
            showCollapseMenuinBottom: true,

            //setting items
            showSettingsBar: true,
            showSettingsPreview: true,
            showSettingsExport: true,
            showSettingsSendMail: true,
            showSettingsSave: true,
            showSettingsLoadTemplate: true,

            //show context menu
            showContextMenu: true,
            showContextMenu_FontFamily: true,
            showContextMenu_FontSize: true,
            showContextMenu_Bold: true,
            showContextMenu_Italic: true,
            showContextMenu_Underline: true,
            showContextMenu_Strikethrough: true,
            showContextMenu_Hyperlink: true,

            //show or hide elements actions
            showRowMoveButton: true,
            showRowRemoveButton: true,
            showRowDuplicateButton: true,
            showRowCodeEditorButton: true,
            onElementDragStart: function(e) {
                console.log('onElementDragStart html');
            },
            onElementDragFinished: function(e,contentHtml) {
                console.log('onElementDragFinished html');
                //console.log(contentHtml);

            },

            onBeforeRowRemoveButtonClick: function(e) {
                console.log('onBeforeRemoveButtonClick html');

                /*
                  if you want do not work code in plugin ,
                  you must use e.preventDefault();
                */
                //e.preventDefault();
            },
            onAfterRowRemoveButtonClick: function(e) {
                console.log('onAfterRemoveButtonClick html');
            },
            onBeforeRowDuplicateButtonClick: function(e) {
                console.log('onBeforeRowDuplicateButtonClick html');
                //e.preventDefault();
            },
            onAfterRowDuplicateButtonClick: function(e) {
                console.log('onAfterRowDuplicateButtonClick html');
            },
            onBeforeRowEditorButtonClick: function(e) {
                console.log('onBeforeRowEditorButtonClick html');
                //e.preventDefault();
            },
            onAfterRowEditorButtonClick: function(e) {
                console.log('onAfterRowDuplicateButtonClick html');
            },
            onBeforeShowingEditorPopup: function(e) {
                console.log('onBeforeShowingEditorPopup html');
                //e.preventDefault();
            },
            onBeforeSettingsSaveButtonClick: function(e) {
                console.log('onBeforeSaveButtonClick html');
                //e.preventDefault();

                //  if (_is_demo) {
                //      $('#popup_demo').modal('show');
                //      e.preventDefault();//return false
                //  }
            },
            onPopupUploadImageButtonClick: function() {
                console.log('onPopupUploadImageButtonClick html');
                var file_data = $('.input-file').prop('files')[0];
                var form_data = new FormData();
                form_data.append('file', file_data);
                $.ajax({
                    url: 'upload.php', // point to server-side PHP script
                    dataType: 'text', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(php_script_response) {
                        loadImages();
                    }
                });
            },
            onSettingsPreviewButtonClick: function(e, getHtml) {
                console.log('onPreviewButtonClick html');
                $.ajax({
                    url: 'export.php',
                    type: 'POST',
                    data: {
                        html: getHtml
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.code == -5) {
                            $('#popup_demo').modal('show');
                            return;
                        } else if (data.code == 0) {
                            $('#previewModalFrame').attr('src',data.preview_url);
                            $('.preview_url').html('<a href="'+data.preview_url+'" target="_blank">'+data.preview_url+'</a>');
                            $('#previewModal').modal('show');
                            // var win = window.open(data.preview_url, '_blank');
                            // if (win) {
                            //     //Browser has allowed it to be opened
                            //     win.focus();
                            // } else {
                            //     //Browser has blocked it
                            //     alert('Please allow popups for this website');
                            // }
                        }
                    },
                    error: function() {}
                });
                //e.preventDefault();
            },

            onSettingsExportButtonClick: function(e, getHtml) {
                console.log('onSettingsExportButtonClick html');
                $.ajax({
                    url: 'export.php',
                    type: 'POST',
                    data: {
                        html: getHtml
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.code == -5) {
                            $('#popup_demo').modal('show');
                        } else if (data.code == 0) {
                            window.location.href = data.url;
                        }
                    },
                    error: function() {}
                });
                //e.preventDefault();
            },
            onBeforeSettingsLoadTemplateButtonClick: function(e) {

                $('.template-list').html('<div style="text-align:center">Loading...</div>');

                $.ajax({
                    url: 'load_templates.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.code == 0) {
                            _templateItems = '';
                            _templateListItems = data.files;
                            for (var i = 0; i < data.files.length; i++) {
                                _templateItems += '<div class="template-item" data-id="' + data.files[i].id + '">' +
																			'<div class="template-item-delete" data-id="' + data.files[i].id + '">' +
																			'<i class="fa fa-trash-o"></i>' +
																			'</div>' +
                                    '<div class="template-item-icon">' +
                                    '<i class="fa fa-file-text-o"></i>' +
                                    '</div>' +
                                    '<div class="template-item-name">' +
                                    	data.files[i].name +
                                    '</div>' +
                                    '</div>';
                            }
                            $('.template-list').html(_templateItems);
                        } else if (data.code == 1) {
                            $('.template-list').html('<div style="text-align:center">No items</div>');
                        }
                    },
                    error: function() {}
                });
            },
            onSettingsSendMailButtonClick: function(e) {
                console.log('onSettingsSendMailButtonClick html');
                //e.preventDefault();
            },
            onPopupSendMailButtonClick: function(e, _html) {
                console.log('onPopupSendMailButtonClick html');
                _email = $('.recipient-email').val();
                _element = $('.btn-send-email-template');

                output = $('.popup_send_email_output');
                var file_data = $('#send_attachments').prop('files');
                var form_data = new FormData();
                //form_data.append('attachments', file_data);
                $.each(file_data,function (i,file) {
                  form_data.append('attachments['+i+']', file);
                });
                form_data.append('html', _html);
                form_data.append('mail', _email);

                $.ajax({
                    url: 'send.php', // point to server-side PHP script
                    dataType: 'json', // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function(data) {
                      if (data.code == 0) {
                          output.css('color', 'green');
                      } else {
                          output.css('color', 'red');
                      }

                      _element.removeClass('has-loading');
                      _element.text('Send Email');

                      output.text(data.message);
                    }
                });

            },
            onBeforeChangeImageClick: function(e) {
                console.log('onBeforeChangeImageClick html');
                loadImages();
            },
            onBeforePopupSelectTemplateButtonClick: function(e) {
                console.log('onBeforePopupSelectTemplateButtonClick html');

            },
            onBeforePopupSelectImageButtonClick: function(e) {
                console.log('onBeforePopupSelectImageButtonClick html');

            },
            onPopupSaveButtonClick: function() {
                console.log('onPopupSaveButtonClick html');
                $.ajax({
                    url: 'save_template.php',
                    type: 'POST',
                    //dataType: 'json',
                    data: {
                        name: $('.template-name').val(),
                        content: $('.bal-content-wrapper').html()
                    },
                    success: function(data) {
                        //  console.log(data);
                        if (data === 'ok') {
                            $('#popup_save_template').modal('hide');
                        } else {
                            $('.input-error').text('Problem in server');
                        }
                    },
                    error: function(error) {
                        $('.input-error').text('Internal error');
                    }
                });
            },
						onUpdateButtonClick: function() {
						console.log('onUpdateButtonClick html');
						$.ajax({
								url: 'upload_template.php',
								type: 'POST',
								//dataType: 'json',
								data: {
										name: $('.bal-project-name').text(),
										content: $('.bal-content-wrapper').html(),
										id: $('.bal-project-name').attr('data-id')
								},
								success: function(data) {
										//  console.log(data);
										// if (data === 'ok') {
										// 		$('#popup_save_template').modal('hide');
										// } else {
										// 		$('.input-error').text('Problem in server');
										// }
								},
								error: function(error) {
										$('.input-error').text('Internal error');
								}
						});
				}

        });



				var tour = new Tour({
						storage: false
				});

				tour.addSteps([{
								element: ".bal-header",
								placement: "bottom",
								title: "Welcome to <b>NewsLetter Builder</b>!",
								content: "This tour will guide you through some of the features we'd like to point out."
						},{
							element:'.bal-menu-item[data-tab-selector="tab-elements"]',
							placement: "right",
							title: "Drag Elements",
							content: "Drag elements for make creative emails"
						},{
							element:'.bal-content-main',
							placement: "left",
							title: "Drop Elements",
							content: "Drop elements to here"
						},{
							element:'.bal-menu-item[data-tab-selector="tab-property"]',
							placement: "right",
							title: "Property of elements",
							content: "You can change setting of any element of builder"
						},
						{
							element:'.blank-page',
							placement: "right",
							title: "Blank page",
							content: "Clear all elements of builder, create new email "
						},{
							element:'.bal-collapse',
							placement: "right",
							title: "Collapse",
							content: "With help this button , you can collapse left menu"
						}


						//
				]);


    _emailBuilder.setAfterLoad(function(e) {
              console.log('onAfterLoad html');
              $.ajax({
                  url: 'load_templates.php',
                  type: 'GET',
                  dataType: 'json',
                  success: function(data) {
                      if (data.code == 0) {
                          _templateItems = '';

                          _templateListItems = data.files;

                          _dataId = 4;
                          //search template in array
                          var result = $.grep(_templateListItems, function(e) {
                              return e.id == _dataId;
                          });

                          _contentText = $('<div/>').html(result[0].content).text();
                          $('.bal-content-wrapper').html(_contentText);

                          $('#popup_load_template').modal('hide');

                          _emailBuilder.makeSortable();


													tour.init();

													// Start the tour
													tour.start();
                      }
                  },
                  error: function() {}
              });
          });




    </script>



</body>

</html>
