<script>
    function closeModal(modalId) {
        document.getElementById(modalId).classList.add("hidden");
    }

    document.querySelectorAll(".btn-detail").forEach(btn => {
        btn.addEventListener("click", () => {
            document.getElementById("detailModal").classList.remove("hidden");
        });
    });

    document.querySelectorAll(".btn-tracking").forEach(btn => {
        btn.addEventListener("click", () => {
            document.getElementById("trackingModal").classList.remove("hidden");
        });
    });
</script>