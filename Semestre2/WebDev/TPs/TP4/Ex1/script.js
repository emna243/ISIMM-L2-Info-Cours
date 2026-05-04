function show() {
  let nom = document.getElementById("nom").value;
  let result = document.getElementById("result");
  let res = "";

  result.textContent = nom.split("").reverse().join("");
}
