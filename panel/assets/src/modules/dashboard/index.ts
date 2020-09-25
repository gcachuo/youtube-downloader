import "@fortawesome/fontawesome-free/js/all"
import {Defaults} from "../../defaults";

export class Dashboard {
    downloadVideo({data}: ApiResponse<{ output: string }>) {
        window.open(Defaults.global.apiUrl + 'public/videos/video.webm', '_blank');
        console.log(data.output);
        return data.output;
    }
}