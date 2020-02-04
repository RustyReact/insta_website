<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Site Preview</title>
        <script type="text/javascript" src="<?php echo base_url('assets/preview/js/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/preview/js/jquery-ui.min.js')?>"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/preview/css/ed-css-preview-package.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/preview/css/css-font-package-v2.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/preview/css/one.preview.colors.scss.css')?>">

        <script src="<?php echo base_url('assets/preview/js/inobounce.min.js')?>"></script>
        <script>var dCurrentScreen = 'preview'</script>
        <style id="css-ddslick" type="text/css">
            .dd-select {
              border-radius: 2px;
              border: solid 1px #ccc;
              position: relative;
              cursor: pointer;
            }

            .dd-desc {
              color: #aaa;
              display: block;
              overflow: hidden;
              font-weight: normal;
              line-height: 1.4em;
            }

            .dd-selected {
              overflow: hidden;
              display: block;
              padding: 10px;
              font-weight: bold;
            }

            .dd-pointer {
              width: 0;
              height: 0;
              position: absolute;
              right: 10px;
              top: 50%;
              margin-top: -3px;
            }

            .dd-pointer-down {
              border: solid 5px transparent;
              border-top: solid 5px #000;
            }

            .dd-pointer-up {
              border: solid 5px transparent !important;
              border-bottom: solid 5px #000 !important;
              margin-top: -8px;
            }

            .dd-options {
              border: solid 1px #ccc;
              border-top: none;
              list-style: none;
              box-shadow: 0px 1px 5px #ddd;
              display: none;
              position: absolute;
              z-index: 2000;
              margin: 0;
              padding: 0;
              background: #fff;
              overflow: auto;
            }

            .dd-option {
              padding: 10px;
              display: block;
              border-bottom: solid 1px #ddd;
              overflow: hidden;
              text-decoration: none;
              color: #333;
              cursor: pointer;
              -webkit-transition: all 0.25s ease-in-out;
              -moz-transition: all 0.25s ease-in-out;
              -o-transition: all 0.25s ease-in-out;
              -ms-transition: all 0.25s ease-in-out;
            }

            .dd-options > li:last-child > .dd-option {
              border-bottom: none;
            }

            .dd-option:hover {
              background: #f3f3f3;
              color: #000;
            }

            .dd-selected-description-truncated {
              text-overflow: ellipsis;
              white-space: nowrap;
            }

            .dd-option-selected {
              background: #f6f6f6;
            }

            .dd-option-image, .dd-selected-image {
              vertical-align: middle;
              float: left;
              margin-right: 5px;
              max-width: 64px;
            }

            .dd-image-right {
              float: right;
              margin-right: 15px;
              margin-left: 5px;
            }

            .dd-container {
              position: relative;
            }​.dd-selected-text {
              font-weight: bold;
            }​
        </style>
    </head>
    <body class="previewMode onePreviewBody " style="opacity: 1;">
        <div style="display: none;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="775" height="1616" viewBox="0 0 775 1616">
                <defs>
                    <g id="icon-devices">
    	               <path class="path1" d="M16.066 16.87c-0.208 0-0.378 0.172-0.378 0.376v12.838c0 0.208 0.17 0.378 0.378 0.378h6.77c0.208 0 0.374-0.172 0.374-0.134v-12.836c0-0.452-0.168-0.622-0.374-0.622h-6.77zM21.96 26.748c0 0.208-0.17 0.374-0.374 0.374h-4.264c-0.206 0-0.374-0.172-0.374-0.374l-0.002-8.16c0-0.208 0.17-0.376 0.374-0.376h4.266c0.204 0 0.374 0.17 0.374 0.376v8.16zM26.208 20.466c0 0.236-0.196 0.432-0.428 0.432h-1.072c-0.236 0-0.428-0.198-0.428-0.432v-1.070c0-0.238 0.194-0.43 0.428-0.43h1.072c0.238 0 0.428 0.194 0.428 0.43v1.070zM31.106 7.954h-12.44c-0.238 0-0.432 0.194-0.432 0.904l0.002 6.19h1.718l-0.002-5.008c0-0.236 0.192-0.432 0.426-0.432h9.008c0.236 0 0.43 0.196 0.43 0.432l-0.006 12.056c0 0.238-0.194 0.432-0.428 0.432h-3.874v1.86h5.598c0.234 0 0.432-0.2 0.432-0.432v-15.574c0-0.236-0.2-0.428-0.432-0.428zM26.464 3.59h-24.956c-0.35 0-0.634 0.286-0.634 0.634v15.706c0 0.35 0.284 0.626 0.634 0.626h8.562c0.35 0 0.638 0.29 0.638 0.642v1.584c0 0.348-0.286 0.634-0.638 0.634l-5.39-0.002c-0.346 0.002-0.634 0.286-0.634 0.632v1.824c0 0.35 0.286 0.634 0.636 0.634h8.712v-8.472l-9.194-0.004c-0.35 0-0.634-0.278-0.634-0.626v-11.114c0-0.354 0.286-0.636 0.634-0.636h19.482c0.346 0 2.54 0.010 3.414 0l0.002-1.428c0-0.352-0.286-0.634-0.634-0.634z" opacity="1" visibility="false"></path>
                    </g>
                    <g id="icon-pc">
    	               <path class="path1" d="M30.904 22.704c0.387 0 0.702-0.309 0.702-0.694v-17.311c0-0.385-0.315-0.699-0.702-0.699h-29.811c-0.387 0-0.699 0.315-0.699 0.699v17.314c0 0.385 0.312 0.694 0.699 0.694h9.442c0.385 0 0.702 0.32 0.702 0.705v1.748c0 0.385-0.317 0.699-0.702 0.699l-5.946-0.001c-0.382 0-0.697 0.315-0.697 0.699v2.012c0 0.385 0.315 0.699 0.697 0.699h22.819c0.387 0 0.699-0.315 0.699-0.699v-2.014c0-0.385-0.312-0.699-0.699-0.699h-6.204c-0.39 0-0.702-0.315-0.702-0.699v-1.748c0-0.385 0.312-0.705 0.702-0.705h9.7zM4.062 19.92c-0.385 0-0.699-0.309-0.699-0.694v-12.252c0-0.39 0.315-0.699 0.699-0.699h23.779c0.387 0 0.702 0.309 0.702 0.699v12.25c0 0.385-0.315 0.699-0.702 0.699l-23.779-0.003z" opacity="1" visibility="false"></path>
                   </g>
                    <g id="icon-phone2">
    	               <path class="path1" d="M9.889 5.5c-0.371 0-0.68 0.309-0.68 0.68v23.166c0 0.377 0.306 0.683 0.68 0.683h12.219c0.371 0 0.68-0.309 0.68-0.683v-23.166c0-0.371-0.306-0.68-0.68-0.68h-12.219zM20.524 23.317c0 0.374-0.303 0.68-0.677 0.68h-7.693c-0.371 0-0.677-0.309-0.677-0.68v-15.161c0-0.371 0.306-0.68 0.677-0.68h7.696c0.371 0 0.68 0.306 0.68 0.68l-0.006 15.161z" opacity="1" visibility="false"></path>
                    </g>
                    <g id="icon-tablet">
    	               <path class="path1" d="M6.5 3.914c-0.361 0-0.658 0.297-0.658 0.658l0.001 24.765c0 0.361 0.297 0.661 0.658 0.661h18.999c0.361 0 0.658-0.3 0.658-0.661l-0.001-24.768c0-0.358-0.297-0.655-0.658-0.655h-18.999zM23.526 26.868c0 0.358-0.297 0.658-0.658 0.658h-13.748c-0.358 0-0.655-0.297-0.655-0.658v-20.496c0-0.361 0.297-0.661 0.655-0.661h13.755c0.361 0 0.658 0.297 0.658 0.661l-0.007 20.496zM17.474 23.522c0 0.361-0.297 0.658-0.658 0.658l-1.635-0.001c-0.361 0-0.655-0.297-0.655-0.658v-1.632c0-0.361 0.294-0.658 0.655-0.658h1.636c0.361 0 0.658 0.294 0.658 0.658l-0.001 1.633z" opacity="1" visibility="false"></path></g>
                </defs>
                <g fill="#000000">
                	<use href="#icon-pc" transform="translate(202 912)"></use>
                	<use href="#icon-phone2" transform="translate(450 912)"></use>
                	<use href="#icon-tablet" transform="translate(150 1248)"></use>
                	<use href="#icon-devices" transform="translate(693 288)"></use>
                </g>
            </svg>
        </div>
        <div id="Wrapper" data-device="all" style="display: block; opacity: 1;">
            <div id="editorSettingsTopBar" class="clearfix">
                <div class="logoWrapper L clearfix">
                    <div class="logo"></div>
                </div>
                <div class="devicesWrapper L clearfix" id="topBarDevicePanel">
                    <a id="desktopDeviceView" class="L layoutIcon overlaySvg" data-device="desktop" data-tooltip-style="d1-topbar" data-tooltip="Desktop view &amp; edit">
                        <svg class="icon" viewBox="0 0 32 32">
                            <use xlink:href="#icon-pc"></use>
                        </svg>
                    </a>
                    <a id="tabletDeviceView" class="L layoutIcon overlaySvg" data-device="tablet" data-tooltip-style="d1-topbar" data-tooltip="Tablet view &amp; edit">
                        <svg class="icon" viewBox="0 0 32 32">
                            <use xlink:href="#icon-tablet"></use>
                        </svg>
                    </a>
                    <a id="mobileDeviceView" class="L layoutIcon overlaySvg" data-device="mobile" data-tooltip-style="d1-topbar" data-tooltip="Mobile view &amp; edit">
                        <svg class="icon" viewBox="0 0 32 32">
                            <use xlink:href="#icon-phone2"></use>
                        </svg>
                    </a>
                    <div class="devicesType-wrapper">
                        <div class="devicesType-inner">
                          <a class="layoutIcon device-symbol dm-icon-apple apple sub-device active" data-devicetype="iphone" href="#"></a>
                          <a class="layoutIcon device-symbol dm-icon-android htc sub-device" data-devicetype="htc" href="#"></a>
                          <a class="layoutIcon dm-icon-rotate rotate sub-device" href="#"></a>
                        </div>
                    </div>
                    <a id="allDeviceView" class="L layoutIcon overlaySvg active" data-device="all" data-tooltip="View your site on all screens!" data-tooltip-style="d1-topbar">
                      <svg class="icon" viewBox="0 0 32 32">
                          <use xlink:href="#icon-devices"></use>
                      </svg>
                    </a>
                </div>
                <div id="insiteDescription">
                    <div id="insiteDescriptionText"></div>
                    <span id="dmNotificationAreaX" class="dm-icon-x2"></span>
                </div>
            </div>

            <div id="previewWrapper" class="close">
              <div id="PreviewPaneWrapper" class="PreviewPaneWrapperMobile all on-desktop" device="all" device-type="iphone">
                <div class="PreviewPaneInnerWrapper desktop active" data-device="desktop" style="transform: scale(0.655385, 0.655385); backface-visibility: hidden; left: 255.983px; top: 213.846px; display: block; background-image: none;">

                  <div class="desktopCircle"></div>
                  <div class="desktopCircle"></div>
                  <div class="tabletOnlyCircle"></div>
                  <div class="device-camera"></div>
                  <div class="device-speaker"></div>
                  <iframe class="NEEPreviewInside desktop" data-src="/site/e12f402c?showOriginal=true&amp;preview=true&amp;insitepreview=true&amp;dm_device=desktop" src="<?php echo base_url().'/builder/site_'.$template_id.'/'.$website_id.'.html'?>" tabindex="-1" style="opacity: 1;"></iframe>
                  <iframe class="NEEPreviewInside tablet" data-src="/site/e12f402c?showOriginal=true&amp;preview=true&amp;insitepreview=true&amp;dm_device=tablet" src="<?php echo base_url().'/builder/site_'.$template_id.'/'.$website_id.'.html'?>" tabindex="-1"></iframe>
                  <iframe class="NEEPreviewInside mobile" data-src="/site/e12f402c?showOriginal=true&amp;preview=true&amp;insitepreview=true&amp;dm_device=mobile" src="<?php echo base_url().'/builder/site_'.$template_id.'/'.$website_id.'.html'?>" tabindex="-1"></iframe>
                  <!-- <div class="mobileOnlyCircle"></div> -->
                  <div class="home-button"></div>
                  <div class="off-button"></div>
                  <div class="silent-button"></div>
                  <div class="up-button"></div>
                  <div class="down-button"></div>
                </div>
                <div class="PreviewPaneInnerWrapper tablet active" data-device="tablet" style="transform: scale(0.393231, 0.393231); backface-visibility: hidden; left: 1072.44px; top: 264.818px; display: block; background-image: none;">
                  <div class="tabletCircle"></div>
                  <iframe class="NEEPreviewInside active all" data-src="/site/e12f402c?showOriginal=true&amp;preview=true&amp;insitepreview=true&amp;dm_device=tablet" src="<?php echo base_url().'/builder/site_'.$template_id.'/'.$website_id.'.html'?>" tabindex="-1" style="display: inline-block; opacity: 1;"></iframe>
                </div>
                <div class="PreviewPaneInnerWrapper mobile active" data-device="mobile" style="transform: scale(0.524308, 0.524308); backface-visibility: hidden; left: 1499.95px; top: 435.347px; display: block; background-image: none;">
                  <div class="silent-button"></div>
                  <div class="up-button"></div>
                  <div class="down-button"></div>
                  <iframe class="NEEPreviewInside active all" data-src="/site/e12f402c?showOriginal=true&amp;preview=true&amp;insitepreview=true&amp;dm_device=mobile" src="<?php echo base_url().'/builder/site_'.$template_id.'/'.$website_id.'.html'?>" tabindex="-1" style="display: inline-block; opacity: 1;"></iframe>
                </div>
              </div>
              <div style="clear: both"></div>
            </div>
        </div>

    <script type="text/javascript" src="<?php echo base_url('assets/preview/js/preview.fw.js')?>"></script>
    <script src="<?php echo base_url('assets/preview/js/jquery.ddslick.min.js')?>"></script>
    <script src="<?php echo base_url('assets/preview/js/nee.controls-simple.js')?>"></script>
    <script type="text/javascript" id="blogScript">
        var blogPostId = null;
        var pageAlias = "null";

        if (blogPostId) {
            $(window).on('storage', onStorageChangeWithinBlogMode);
        }

        function onStorageChangeWithinBlogMode(event) {
            var data = event.originalEvent || {};
            if (data.key === ('blog-post-' + blogPostId + '-timestamp') && data.oldValue !== data.newValue) {
                $('iframe.NEEPreviewInside').toArray().forEach(function (iframe) {
                    iframe.contentWindow.location.reload();
                });
            }
        }
    </script>
    <script type="text/javascript">
        var insiteDesc = new Array();
        var currentRuleId = null;

        
        window.isSitePreview = true;
        (function ($, global) {
            function showError(input, msg) {
                input.parent().find('label.error').text(msg).fadeIn();
            }

            height = "null" === "true" ? 650 : undefined;
            width = "null" === "true" ? 1150 : undefined;

            $("#dmNotificationAreaX").off("click").on("click", function () {
                $("#insiteDescription").hide();
                $("body").removeClass('insiteMessage');
            });

            function selectInSite(ruleId) {

                if (!ruleId) {
                    $("#insiteDescription").hide();
                    $("body").removeClass('insiteMessage');
                    if (!currentRuleId) {
                        return;
                    }
                    currentRuldId = null;

                }
                else {
                    $("#insiteDescriptionText").html(insiteDesc[ruleId]);
                    $("#insiteDescription").show();
                    $("body").addClass('insiteMessage');
                    currentRuleId = ruleId;
                }

                $('iframe.NEEPreviewInside').each(function () {
                    var origSrc = $(this).attr('data-src'),
                        newSrc = origSrc.replace(/&dmForceRules=[^&]*/, "");

                    if (ruleId && (insiteRulesDeviceMap[ruleId].length == 0 ||
                        insiteRulesDeviceMap[ruleId].indexOf("desktop") >= 0 && origSrc.indexOf("dm_device=desktop") >= 0 ||
                        insiteRulesDeviceMap[ruleId].indexOf("tablet") >= 0 && origSrc.indexOf("dm_device=tablet") >= 0 ||
                        insiteRulesDeviceMap[ruleId].indexOf("mobile") >= 0 && origSrc.indexOf("dm_device=mobile") >= 0)) {
                        newSrc += "&dmForceRules=" + ruleId;
                    }

                    if (ruleId && insiteRulesPagesMap[ruleId] && insiteRulesPagesMap[ruleId] != "*") {
                        // navigate to the page the rule applies to
                        newSrc = newSrc.replace(/e12f402c[^\?]*/, "e12f402c/" + insiteRulesPagesMap[ruleId]);
                    } else {
                        newSrc = newSrc.replace(/e12f402c[^\?]*/, "e12f402c");
                    }

                    if (origSrc != newSrc) {
                        if ($(this).attr('src') != '') {
                            $(this).attr('src', newSrc);
                        }
                        $(this).attr('data-src', newSrc);
                    }

                });
            }

            $(function () {
                var iFrames, iFramesLength, iFrame, i,
                    currentDevice = "desktop",
                    showCookieNotification = false;
                var $wrapper = $("#Wrapper");

                iFrames = document.querySelectorAll('iframe:not(.tablet):not(.mobile)');
                iFramesLength = iFrames.length;
                for (i = 0; i < iFramesLength; i++) {
                    iFrame = iFrames[i];
                    $.previewfw.onLoadAction({ iFrame: iFrame, length: iFramesLength });
                }
                if (currentDevice === "mobile") {
                    window.location.replace('/site/e12f402c' + '?showOriginal=true&preview=true&insitepreview=true&dm_device=' + currentDevice);
                } else {
                    $wrapper.css({ display: 'block', opacity: 1 });
                    $.previewfw.inPreviewMode = true;
                    handleDevicesSizes("all");
                    //change device layout
                    $(".devicesWrapper a").click(function (e) {
                        e.preventDefault();
                        var $this = $(this);
                        //check if device is main device or sub device
                        if ($this.parents().hasClass('devicesType-wrapper')) {
                            changeSubDeviceType($this);
                        } else {
                            changeMainDevicetype($this);
                        }
                    });
                    var forceDevice = "null";
                    if (forceDevice != "null") {
                        $('.PreviewPaneInnerWrapper').css('visibility', 'hidden');
                        $(".devicesWrapper a[data-device='" + forceDevice + "']").click();
                        $('.PreviewPaneInnerWrapper').css('visibility', 'visible');

                    }
                }

                
                $('#inSiteSelect').ddslick({
                    onSelected: function (obj) {
                        var ruleId = obj.selectedData.value;
                        selectInSite(ruleId);
                    }
                });

            });

            //handle with main device
            function changeMainDevicetype(thisDevice) {
                var iFrame, visibleIframes;
                var forceDevice = "null";
                var PreviewPaneWrapper = $("#PreviewPaneWrapper");
                var PreviewPaneInnerWrapper = $(".PreviewPaneInnerWrapper");
                var previewWrapper = $("#previewWrapper");
                //remove active from all devices except sub-diveces because we want to keep the sub-device active state
                $(".devicesWrapper a:not(.sub-device)").removeClass("active");
                //remove rotate class if exist. we don't want to save the rotate state
                $(".rotate").removeClass("active");
                PreviewPaneWrapper.removeClass("rotate-device");

                //make choosen device active
                thisDevice.addClass("active");
                var device = thisDevice.data("device");

                $("#Wrapper").attr("data-device", device);
                iFrame = previewWrapper.find('iframe.' + device);
                visibleIframes = iFrame;
                if (thisDevice.is('[data-device="all"]')) {
                    PreviewPaneWrapper.addClass("all").attr("device", "all");
                    PreviewPaneInnerWrapper.addClass("active");
                    visibleIframes = previewWrapper.find('iframe.' + device + ", iframe.all");
                } else {
                    PreviewPaneWrapper.removeClass("all").attr("device", device);
                    PreviewPaneInnerWrapper.removeClass("active");
                    $(".PreviewPaneInnerWrapper[data-device='" + device + "']").addClass("active");
                    iFrame.get(0).style.opacity = 1;
                    try {
                        iFrame.get(0).contentWindow.jQuery.DM.updateWidthAndHeight('100%', '100%');
                    } catch (e) {
                    }
                }
                if (device == "desktop") {
                    previewWrapper.css({ overflow: "hidden" });

                } else {
                    previewWrapper.css({ overflow: "auto" });
                }

                $.each(visibleIframes, function (index, value) {
                    var f = $(value);
                    if (f.attr("src") == '') {
                        f.attr("src", f.attr("data-src"))
                        value.contentWindow.location.replace(f.attr("src"));
                    }
                });

                handleDevicesSizes(device);

            }

            //handle with sub device
            function changeSubDeviceType(deviceCompany) {
                //if is rotate button
                if (deviceCompany.is(".rotate")) {
                    $('#PreviewPaneWrapper').toggleClass('rotate-device');
                    deviceCompany.toggleClass('active');
                } else {
                    //change the device company
                    var deviceType = deviceCompany.attr('data-deviceType');
                    var allCompanies = $('.device-symbol');
                    allCompanies.removeClass('active');
                    $('#PreviewPaneWrapper').attr('device-type', deviceType);
                    deviceCompany.addClass('active');
                }
            }

            $(window).resize(function () {
                if ($("#PreviewPaneWrapper").attr("device") === "all") {
                    handleDevicesSizes($("#PreviewPaneWrapper").attr("device"));
                } else {
                    handleDevicesSizes($("#PreviewPaneWrapper").attr("device"));
                }

            });

            function handleDevicesSizes(device) {
                if (device === "all") {
                    $.previewfw.calcDevicesPositionAndScale(device, width, height);
                } else {
                    $.previewfw.calcDevicesPositionAndScale(device);
                }
            }

        })(jQuery, this);

        var insiteRulesDeviceMap = {};
        var insiteRulesPagesMap = {};
    </script>
    </body>
</html>