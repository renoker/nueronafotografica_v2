var a=0;window.changePunto=function(u,d,c,l,e){for(let n=0;n<=e;n++){var t=document.getElementById("punto_"+n);t.classList.remove("active")}var t=document.getElementById("punto_"+u);t.classList.add("active");var o=document.getElementById(c);l==375?a=-w*e:a=-l*e,o.style.transition="all 1s",o.style.marginTop=a+"px"};
