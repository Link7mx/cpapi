
  var theForm = document.forms['Form1'];
  if (!theForm) {
      theForm = document.Form1;
  }
  function __doPostBack(eventTarget, eventArgument) {
      if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
          theForm.__EVENTTARGET.value = eventTarget;
          theForm.__EVENTARGUMENT.value = eventArgument;
          theForm.submit();
      }
  }
 