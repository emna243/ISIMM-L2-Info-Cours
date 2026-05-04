function calculer() {
  let a = Number(document.getElementById("a").value);
  let b = Number(document.getElementById("b").value);
  let oper = document.getElementById("oper").innerText;
  let res = document.getElementById("res");
  let r = 0;

  if (oper === "+") {
    r = a + b;
  } else if (oper === "-") {
    r = a - b;
  } else if (oper === "*") {
    r = a * b;
  } else if (oper === "/") {
    r = a / b;
  }
  res.value = r;
  console.log(r);
  console.log(a);
  console.log(b);
  console.log(oper);
}

function changeOper() {
  document.getElementById("oper").innerText =
    document.getElementById("operChoice").value;
  calculer();
}

changeOper();
document.getElementById("res").textContent = "";
