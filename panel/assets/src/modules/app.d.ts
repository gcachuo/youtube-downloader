///<reference path="../typings/globals.d.ts"/>
declare namespace App {
    //export class <module>
    export class Dashboard {
        downloadVideo(response: ApiResponse<{ output: string }>): string
    }
}
