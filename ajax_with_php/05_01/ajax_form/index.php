<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Asynchronous Form</title>
    <style>
      #result {
        display: none;
      }
    </style>
  </head>
  <body>

    <div id="measurements">
      <p>Enter measurements below to determine the total volume.</p>
      <form id="measurement-form" action="process_measurements.php" method="POST">
        Length: <input type="text" name="length" /><br />
        <br />
        Width: <input type="text" name="width" /><br />
        <br />
        Height: <input type="text" name="height" /><br />
        <br />
        <input id="html-submit" type="submit" value="Submit" />
      </form>
    </div>

    <div id="result">
      <p>The total volume is: <span id="volume"></span></p>
    </div>

    <script>

      var result_div = document.getElementById("result");
      var volume = document.getElementById("volume");
      var button = document.getElementById("html-submit");
      var orig_button_value = button.value;

      function showSpinner() {
        var spinner = document.getElementById("spinner");
        spinner.style.display = 'block';
      }

      function hideSpinner() {
        var spinner = document.getElementById("spinner");
        spinner.style.display = 'none';
      }

      function disableSubmitButton() {
        button.disabled = true;
        button.value = 'Loading...';
      }

      function enableSubmitButton() {
        button.disabled = false;
        button.value = orig_button_value;
      }

      function postResult(value) {
        volume.innerHTML = value;
        result_div.style.display = 'block';
      }

      function clearResult() {
        volume.innerHTML = '';
        result_div.style.display = 'none';
      }

      function gatherformData(form) {
        var inputs = form.getElementsByTagName('input');
        var array = [];
        for(i=0; i < inputs.length; i++) {
          var inputNameValue = inputs[i].name + '=' + inputs[i].value;
          array.push(inputNameValue);
        }
        return array.join('&');
      }

      function calculateMeasurements() {
        clearResult();

        var form = document.getElementById("measurement-form");
        var action = form.getAttribute("action");

        // determine form action
        // gather form data
        var form_data = gatherformData(form);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', action, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function () {
          if(xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            console.log('Result: ' + result);
            postResult(result);
          }
        };
        xhr.send(form_data);
      }

      // var button = document.getElementById("ajax-submit");
      button.addEventListener("click", function(e) {
        e.preventDefault();
        calculateMeasurements();
      });

    </script>

  </body>
</html>
