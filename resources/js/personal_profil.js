const modal = document.getElementById("myModal");
        const btn = document.getElementById("open-modal");
        const span = document.getElementById("close-modal");

        btn.addEventListener("click", () => {
            modal.classList.remove("hidden");
        });

        span.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        window.addEventListener("click", (event) => {
            if (event.target == modal) {
                modal.classList.add("hidden");
            }
        });

        const premiumForm = document.getElementById("premium-form");
        premiumForm.addEventListener("submit", (event) => {
            event.preventDefault();
            const profileType = document.getElementById("profile-type").value;
            const name = document.getElementById("name").value;
            const paymentMethod = document.getElementById("payment-method").value;
            console.log("Profil type:", profileType);
            console.log("Nom:", name);
            console.log("Mode de paiement:", paymentMethod);
            modal.classList.add("hidden");
        });