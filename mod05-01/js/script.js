<script>
		function hideAll() {
			document.getElementById('all').style.display = "none";
		}
		
		function showAll() {
			document.getElementById('all').style.display = "block";
		}

		function changeContent() {
			document.getElementById("content").innerHTML = "Rochelle Benet Ilustre";
		}

		function changeAttr() {
			document.getElementById("attr").height = 100;
		}

		function changeImage() {
			document.getElementById("attr").src = "img/image2.png";
		}

		function changeColor() {
			document.getElementById("css").style.color = "blue";
		}

		function computeSum() {
			var a = document.getElementById("input1").value;
			var b = document.getElementById("input2").value;
			var sum = parseInt(a) + parseInt(b);
			document.getElementById("sum").innerHTML = sum;
		}

	</script>