<style>
    .modal-backdrop {
        background-color: rgba(255,255,255,0.9);
    }
    .modal-backdrop.show {
        opacity: 1;
    }
</style>

<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true" onclick="stop()">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-body">
            <div class="news_videoBox">
                <div id="news_video"></div>
                <p data-bs-dismiss="modal" class="close_btn">close</p>
            </div>
        </div>
        </div>
    </div>
</div>