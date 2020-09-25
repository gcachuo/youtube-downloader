<div class="container pt-3">
    <h4>Descarga de videos de Youtube</h4>
    <form uri="video/descarga" method="post" callback="downloadVideo">
        <div class="form-group">
            <input type="text" placeholder="Link del video" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Descargar</button>
    </form>
    <hr>
    <textarea id="txtOutput" class="form-control" placeholder="Output" style="height: calc(100vh - 200px)"></textarea>
</div>
<script>
    function downloadVideo(response) {
        const dashboard = new App.Dashboard();
        const output = dashboard.downloadVideo(response);
        $("#txtOutput").text(output);
    }
</script>
