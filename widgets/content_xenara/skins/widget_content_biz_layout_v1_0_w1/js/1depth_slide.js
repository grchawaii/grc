(function ($) {
var types = ['DOMMouseScroll', 'mousewheel'];
$.event.special.mousewheel = {
setup: function () {
if (this.addEventListener) for (var i = types.length; i;) this.addEventListener(types[--i], handler, false);
else this.onmousewheel = handler
},
teardown: function () {
if (this.removeEventListener) for (var i = types.length; i;) this.removeEventListener(types[--i], handler, false);
else this.onmousewheel = null
}
};
$.fn.extend({
mousewheel: function (fn) {
return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel")
},
unmousewheel: function (fn) {
return this.unbind("mousewheel", fn)
}
});
function handler(event) {
var args = [].slice.call(arguments, 1),
delta = 0,
returnValue = true;
event = $.event.fix(event || window.event);
event.type = "mousewheel";
if (event.wheelDelta) delta = event.wheelDelta / 120;
if (event.detail) delta = -event.detail / 3;
args.unshift(event, delta);
return $.event.handle.apply(this, args)
}
})(jQuery);
(function ($) {
function Reflection(img, refH, opacity) {
var reflection, cntx, imageWidth = img.width,
imageHeight = img.width,
gradient, parent;
parent = $(img.parentNode);
if ($.browser.msie) {
this.element = reflection = parent.append("<img class='reflection' style='position:absolute'/>").find(':last')[0];
reflection.src = img.src;
reflection.style.filter = "flipv progid:DXImageTransform.Microsoft.Alpha(opacity=" + (opacity * 100) + ", style=1, finishOpacity=0, startx=0, starty=0, finishx=0, finishy=" + (refH / imageHeight * 100) + ")"
} else {
this.element = reflection = parent.append("<canvas class='reflection' style='position:absolute'/>").find(':last')[0];
if (!reflection.getContext) {
return
}
cntx = reflection.getContext("2d");
try {
$(reflection).attr({
width: imageWidth,
height: refH
});
cntx.save();
cntx.translate(0, imageHeight - 1);
cntx.scale(1, -1);
cntx.drawImage(img, 0, 0, imageWidth, imageHeight);
cntx.restore();
cntx.globalCompositeOperation = "destination-out";
gradient = cntx.createLinearGradient(0, 0, 0, refH);
gradient.addColorStop(0, "rgba(255, 255, 255, " + (1 - opacity) + ")");
gradient.addColorStop(1, "rgba(255, 255, 255, 1.0)");
cntx.fillStyle = gradient;
cntx.fillRect(0, 0, imageWidth, refH)
} catch(e) {
return
}
}
$(reflection).attr({
'alt': $(img).attr('alt'),
title: $(img).attr('title')
})
}
var Item = function (imgIn, options) {
this.orgWidth = imgIn.width;
this.orgHeight = imgIn.height;
this.image = imgIn;
this.reflection = null;
this.alt = imgIn.alt;
this.title = imgIn.title;
this.imageOK = false;
this.options = options;
this.imageOK = true;
if (this.options.refH > 0) {
this.reflection = new Reflection(this.image, this.options.refH, this.options.reflOpacity)
}
$(this.image).css('position', 'absolute')
};
var Controller = function (container, images, options) {
var items = [],
funcSin = Math.sin,
funcCos = Math.cos,
ctx = this;
this.controlTimer = 0;
this.stopped = false;
this.container = container;
this.xRadius = options.xRadius;
this.yRadius = options.yRadius;
this.showFrontTextTimer = 0;
this.autoRotateTimer = 0;
if (options.xRadius === 0) {
this.xRadius = ($(container).width() / 2.3)
}
if (options.yRadius === 0) {
this.yRadius = ($(container).height() / 6)
}
this.xCentre = options.xPos;
this.yCentre = options.yPos;
this.frontIndex = 0;
this.rotation = this.destRotation = Math.PI / 2;
this.timeDelay = 1000 / options.FPS;
if (options.imageC !== null) {
$(options.imageC).css('display', 'block');
$(options.imageT).css('display', 'block')
}
$(container).css({
position: 'relative',
overflow: 'hidden'
});
$(options.btnLeft).css({
'display': 'inline',
"top": ($(options.btnLeft).parent().parent().height() / 2) - ($(options.btnLeft).height() / 2),
"left": options.bothspace
});
$(options.btnRight).css({
'display': 'inline',
"top": ($(options.btnRight).parent().parent().height() / 2) - ($(options.btnRight).height() / 2),
"right": options.bothspace
});
$(options.btnLeft).bind('mouseup', this, function (event) {
event.data.rotate( - 1);
return false
});
$(options.btnRight).bind('mouseup', this, function (event) {
event.data.rotate(1);
return false
});
if (options.mouseWheel) {
$(container).bind('mousewheel', this, function (event, delta) {
event.data.rotate(delta);
return false
})
}
$(container).bind('mouseover click', this, function (event) {
clearInterval(event.data.autoRotateTimer);
var text = $(event.target).attr('alt');
if (text !== undefined && text !== null) {
clearTimeout(event.data.showFrontTextTimer);
$(options.imageC).html(($(event.target).attr('alt')));
$(options.imageT).html(($(event.target).attr('title')));
if (options.bringToFront && event.type == 'click') {
var idx = $(event.target).data('itemIndex');
var frontIndex = event.data.frontIndex;
var diff = idx - frontIndex;
event.data.rotate( - diff)
}
}
});
$(container).bind('mouseout', this, function (event) {
var context = event.data;
clearTimeout(context.showFrontTextTimer);
context.showFrontTextTimer = setTimeout(function () {
context.showFrontText()
},
100);
context.autoRotate()
});
$(container).bind('mousedown', this, function (event) {
event.data.container.focus();
return false
});
container.onselectstart = function () {
return false
};
this.innerWrapper = $(container).wrapInner('<div style="position:absolute;width:100%;height:100%;"/>').children()[0];
this.showFrontText = function () {
var textIndex;
if (options.autoRotate == 'right' && this.frontIndex != 0) {
textIndex = items.length + this.frontIndex
} else {
textIndex = this.frontIndex
}
if (items[textIndex] === undefined) {
return
}
$(options.imageT).html($(items[textIndex].image).attr('title'));
$(options.imageC).html($(items[textIndex].image).attr('alt'))
};
this.go = function () {
if (this.controlTimer !== 0) {
return
}
var context = this;
this.controlTimer = setTimeout(function () {
context.updateAll()
},
this.timeDelay)
};
this.stop = function () {
clearTimeout(this.controlTimer);
this.controlTimer = 0
};
this.rotate = function (direction) {
this.frontIndex -= direction;
this.frontIndex %= items.length;
this.destRotation += (Math.PI / items.length) * (2 * direction);
this.showFrontText();
this.go()
};
this.autoRotate = function () {
if (options.autoRotate !== 'no') {
var dir = (options.autoRotate === 'right') ? 1 : -1;
this.autoRotateTimer = setInterval(function () {
ctx.rotate(dir)
},
options.autoRotateDelay)
}
};
this.updateAll = function () {
var minScale = options.minScale;
var smallRange = (1 - minScale) * 0.5;
var w, h, x, y, scale, item, sinVal;
var change = (this.destRotation - this.rotation);
var absChange = Math.abs(change);
this.rotation += change * options.speed;
if (absChange < 0.001) {
this.rotation = this.destRotation
}
var itemsLen = items.length;
var spacing = (Math.PI / itemsLen) * 2;
var radians = this.rotation;
var isMSIE = $.browser.msie;
this.innerWrapper.style.display = 'none';
var style;
var px = 'px',
refH;
var context = this;
for (var i = 0; i < itemsLen; i++) {
item = items[i];
sinVal = funcSin(radians);
scale = ((sinVal + 1) * smallRange) + minScale;
x = this.xCentre + (((funcCos(radians) * this.xRadius) - (item.orgWidth * 0.5)) * scale);
y = this.yCentre + (((sinVal * this.yRadius)) * scale);
if (item.imageOK) {
var img = item.image;
w = img.width = item.orgWidth * scale;
h = img.height = item.orgHeight * scale;
img.style.left = x + px;
img.style.top = y + px;
img.style.zIndex = "" + (scale * 100) >> 0;
if (options.opacity == true) {
img.style.opacity = "" + (scale * 1);
img.style.filter = "alpha(opacity=" + (scale * 100) + ")"
}
if (item.reflection !== null) {
refH = options.refH * scale;
style = item.reflection.element.style;
style.left = x + px;
style.top = y + h + options.refG * scale + px;
style.width = w + px;
if (isMSIE) {
style.filter.finishy = (refH / h * 100)
} else {
style.height = refH + px
}
}
}
radians += spacing
}
this.innerWrapper.style.display = 'block';
if (absChange >= 0.001) {
this.controlTimer = setTimeout(function () {
context.updateAll()
},
this.timeDelay)
} else {
this.stop()
}
};
this.checkImagesLoaded = function () {
var i;
for (i = 0; i < images.length; i++) {
if ((images[i].width === undefined) || ((images[i].complete !== undefined) && (!images[i].complete))) {
return
}
}
for (i = 0; i < images.length; i++) {
items.push(new Item(images[i], options));
$(images[i]).data('itemIndex', i)
}
clearInterval(this.tt);
this.showFrontText();
this.autoRotate();
this.updateAll();
$("img[class=ajax_loader]").hide();
options.imageC.parent().parent().css("visibility", "visible")
};
this.tt = setInterval(function () {
ctx.checkImagesLoaded()
},
50)
};
$.fn.rotationCarousel = function (options) {
$(this).find("img[class=ajax_loader]").css({
"margin-top": ($(this).height() / 2) - ($("img[class=ajax_loader]").height() / 2),
"margin-left": ($(this).width() / 2) - ($("img[class=ajax_loader]").width() / 2)
});
this.each(function () {
options = $.extend({},
{
refH: 0,
reflOpacity: 0.5,
refG: 0,
minScale: 0.5,
xPos: 0,
yPos: 0,
xRadius: 0,
yRadius: 0,
imageC: null,
imageT: null,
FPS: 30,
autoRotate: 'no',
autoRotateDelay: 1500,
speed: 0.2,
mouseWheel: false,
opacity: true,
bringToFront: false,
bothspace: 10
},
options);
$(this).data('img', new Controller(this, $('img', $(this)), options))
});
return this
}
})(jQuery);