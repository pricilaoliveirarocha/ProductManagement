document.addEventListener("DOMContentLoaded", function () {

// check to save the user login
  const senhaInput = document.getElementById("senha");
  const toggleBtn = document.getElementById("toggleSenha");
  toggleBtn.addEventListener("click", function () {
    const type = senhaInput.type === "password" ? "text" : "password";
    senhaInput.type = type;
    this.textContent = type === "password" ? "👁️" : "🙈";
  });
});
