/**
 * by MonsterDuang
 */
;(function($) {
    /**
     * 1, ç¼©ç•¥å›¾å¤§å°å’Œçˆ¶å®¹å™¨å¤§å°ä¸€è‡´
     * 2, çˆ¶å®¹å™¨ href å±žæ€§ä¸ºé«˜æ¸…å›¾ç‰‡è·¯å¾„
     */
    $.fn.zoomImage = function(paras) {
        /**
         * é»˜è®¤å‚æ•°
         */
        var defaultParas = {
            layerW: 250, // é®ç½©å®½åº¦
            layerH: 250, // é®ç½©é«˜åº¦
            layerOpacity: 0.2, // é®ç½©é€æ˜Žåº¦
            layerBgc: '#000', // é®ç½©èƒŒæ™¯é¢œè‰²
            showPanelW: 500, // æ˜¾ç¤ºæ”¾å¤§åŒºåŸŸå®½
            showPanelH: 500, // æ˜¾ç¤ºæ”¾å¤§åŒºåŸŸé«˜
            marginL: 5, // æ”¾å¤§åŒºåŸŸç¦»ç¼©ç•¥å›¾å³ä¾§è·ç¦»
            marginT: 0 // æ”¾å¤§åŒºåŸŸç¦»ç¼©ç•¥å›¾ä¸Šä¾§è·ç¦»

        };

        paras = $.extend({}, defaultParas, paras);

        $(this).each(function() {
            var self = $(this).css({position: 'relative'});
            var selfOffset = self.offset();
            var imageW = self.width(); // å›¾ç‰‡é«˜åº¦
            var imageH = self.height();

            self.find('img').css({
                width: '100%',
                height: '100%'
            });

            // å®½æ”¾å¤§å€æ•°
            var wTimes = paras.showPanelW / paras.layerW;
            // é«˜æ”¾å¤§å€æ•°
            var hTimes = paras.showPanelH / paras.layerH;

            // æ”¾å¤§å›¾ç‰‡
            var img = $('<img>').attr('src', self.attr("href")).css({
                position: 'absolute',
                left: '0',
                top: '0',
                width: imageW * wTimes,
                height: imageH * hTimes
            }).attr('id', 'big-img');

            // é®ç½©
            var layer = $('<div>').css({
                display: 'none',
                position: 'absolute',
                left: '0',
                top: '0',
                backgroundColor: paras.layerBgc,
                width: paras.layerW,
                height: paras.layerH,
                opacity: paras.layerOpacity,
                border: '1px solid #ccc',
                cursor: 'crosshair'
            });

            // æ”¾å¤§åŒºåŸŸ
            var showPanel = $('<div>').css({
                display: 'none',
                position: 'absolute',
                overflow: 'hidden',
                left: imageW + paras.marginL,
                top: paras.marginT,
                width: paras.showPanelW,
                height: paras.showPanelH,
            }).append(img);

            self.append(layer).append(showPanel);

            self.on('mousemove', function(e) {
                // é¼ æ ‡ç›¸å¯¹äºŽç¼©ç•¥å›¾å®¹å™¨çš„åæ ‡
                var x = e.pageX - selfOffset.left;
                var y = e.pageY - selfOffset.top;

                if(x <= paras.layerW / 2) {
                    x = 0;
                }else if(x >= imageW - paras.layerW / 2) {
                    x = imageW - paras.layerW;
                }else {
                    x = x - paras.layerW / 2;
                }

                if(y < paras.layerH / 2) {
                    y = 0;
                } else if(y >= imageH - paras.layerH / 2) {
                    y = imageH - paras.layerH;
                } else {
                    y = y - paras.layerH / 2;
                }

                layer.css({
                    left: x,
                    top: y
                });

                img.css({
                    left: -x * wTimes,
                    top: -y * hTimes
                });
            }).on('mouseenter', function() {
                layer.show();
                showPanel.show();
            }).on('mouseleave', function() {
                layer.hide();
                showPanel.hide();
            });
        });
    }
})(jQuery);