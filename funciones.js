function rotate(angle){
    var rotation = Math.PI * angle / 180;
    var costheta = Math.cos(rotation);
    var sintheta = Math.sin(rotation); 
    if(!window.ActiveXObject){
        this.style.position='absolute';
        this.style.webkitTransform ='rotate('+angle+'deg)';
        this.style.khtmlTransform ='rotate('+angle+'deg)';  
        this.style.MozTransform='rotate('+angle+'deg)';    
        this.style.OTransform='rotate('+angle+'deg)';
        this.style.transform='rotate('+angle+'deg)';
    }else{
        this.style.filter="progid:DXImageTransform.Microsoft.Matrix(sizingMethod='auto expand')";
        this.filters.item(0).M11 = costheta;
        this.filters.item(0).M12 = -sintheta;
        this.filters.item(0).M21 = sintheta;
        this.filters.item(0).M22 = costheta; 
        this.style.top= ((this.parentNode.offsetHeight/2)-(this.offsetHeight/2))+'px';
        this.style.left=  ((this.parentNode.offsetWidth/2)-(this.offsetWidth/2))+'px';
    }
}
var ns={}
onload=function(){
    (function(){
    document.getElementById('im').onmousedown=function(){
        var _this=this;
        ns.angulo=ns.angulo || 0;
        ns.timmer=setInterval(function(){rotate.call(_this,ns.angulo+=5)},30);
    }
    document.getElementById('im').onmouseup=function(){
        clearInterval(ns.timmer);
    }
    })();
}