function changeleft() {
  document.getElementById("land").style.backgroundImage =
    "url('../Media/landing 1.jpg')";
  document.getElementById("actright").style.backgroundColor = "transparent";
  document.getElementById("actright").style.borderColor = "white";
  document.getElementById("actleft").style.backgroundColor = "red";
  document.getElementById("actleft").style.borderColor = "red";
  document.getElementById("tex").style.zIndex = "0";
  document.getElementById("tex2").style.zIndex = "-1";
}
function changeright() {
  document.getElementById("land").style.backgroundImage =
    "url('../Media/landing 3.jpg')";
  document.getElementById("actleft").style.backgroundColor = "transparent";
  document.getElementById("actleft").style.borderColor = "white";
  document.getElementById("actright").style.backgroundColor = "red";
  document.getElementById("actright").style.borderColor = "red";
  document.getElementById("tex").style.zIndex = "-1";
  document.getElementById("tex2").style.zIndex = "0";
}

window.onscroll = function () {
  changeHeaderBackground();
};
function changeHeaderBackground() {
  if (document.documentElement.scrollTop > 570) {
    document.getElementById("back").className = "head";
  } else {
    document.getElementById("back").className = "";
  }
}

function changeUrl() {
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
}

function openform() {
  document.getElementById("f1").style.zIndex = "6";
  document.getElementById("f1").style.opacity = "1";
  document.getElementById("b1").style.zIndex = "5";
  document.getElementById("b1").style.opacity = "0.7";
  document.getElementById("b1").style.cursor = "pointer";
}
function closeform() {
  document.getElementById("f1").style.zIndex = "-2";
  document.getElementById("f1").style.opacity = "0";
  document.getElementById("b1").style.zIndex = "-2";
  document.getElementById("b1").style.opacity = "0";
  document.getElementById("b1").style.cursor = "auto";
}
function enableButton() {
  document.getElementById("name").disabled = false;
  document.getElementById("pass").disabled = false;
  document.getElementById("da").disabled = false;
  document.getElementById("gen").disabled = false;
  document.getElementById("ph").disabled = false;
  document.getElementById("ci").disabled = false;
  document.getElementById("re").disabled = false;
  document.getElementById("em").disabled = false;
  document.getElementById("name").style.color = "red";
  document.getElementById("pass").style.color = "red";
  document.getElementById("da").style.color = "red";
  document.getElementById("gen").style.color = "red";
  document.getElementById("ph").style.color = "red";
  document.getElementById("ci").style.color = "red";
  document.getElementById("re").style.color = "red";
  document.getElementById("em").style.color = "red";
  document.getElementById("name").style.border = "1px solid red";
  document.getElementById("pass").style.border = "1px solid red";
  document.getElementById("da").style.border = "1px solid red";
  document.getElementById("gen").style.border = "1px solid red";
  document.getElementById("ph").style.border = "1px solid red";
  document.getElementById("ci").style.border = "1px solid red";
  document.getElementById("re").style.border = "1px solid red";
  document.getElementById("em").style.border = "1px solid red";
}

/* <script src=\"../JS/change.js\"></script>
<script type=\"text/javascript\">
    window.history.forward();
    function noBack(){ 
    window.history.forward();
  }
</script>   
<script $(document).ready(function() { noBack();}); </script> */
