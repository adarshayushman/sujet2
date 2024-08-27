function soumettre() {
  if (confirm("Voulez-vous vraiment soumettre ?")) {
  }
}

function verif() {
  if (document.getElementById("op1").value < 18) {
    alert("Vous etes trop jeune");
    document.getElementById("op1").style.color = "red";
  } else {
    document.getElementById("op1").style.color = "green";
  }
}
