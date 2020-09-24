<div class="container pt-3">
    <h4>Descarga de videos de Youtube</h4>
    <form uri="video/descarga" method="post" callback="downloadVideo">
        <div class="form-group">
            <input type="text" placeholder="Link del video" class="form-control">
        </div>
        <button class="btn btn-primary">Descargar</button>
    </form>
</div>
<script>
    function downloadVideo(response) {
        const dashboard = new App.Dashboard();
        dashboard.downloadVideo(response);
    }
</script>
