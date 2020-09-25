import "@fortawesome/fontawesome-free/js/all"
import {Defaults} from "../../defaults";

export class Dashboard {
    downloadVideo({data}: ApiResponse) {
        window.open(Defaults.global.apiUrl + '/public/videos/video.webm', '_blank');
    }
}