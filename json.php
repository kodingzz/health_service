<p id="demo"></p>



<script>

var xmlhttp = new XMLHttpRequest();



xmlhttp.onreadystatechange = function() {

  if (this.readyState == 4 && this.status == 200) {

    myObj = JSON.parse(this.responseText);

    document.getElementById("demo").innerHTML = myObj.site; // 사이트 키 출력

  }

};

xmlhttp.open("GET", "test.php", true); // test.php에서 정보 가져오기

xmlhttp.send();

</script>