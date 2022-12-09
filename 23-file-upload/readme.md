## **File Upload**

    ➢➢➢ How to upload file through Laravel?

        1.  Make a view name upload.blade.php 

        2. Make a html form inside the view

            <h1>Upload File</h1>
            <form action="upload" method="POST">
                @csrf
                <input type="file" name="file"><br><br>
                <button type="submit">Upload File</button>
            </form>

        3. Make a route of the view upload.blade.php

            Add this line at the top, 

                use App\Http\controllers\uploadController;

            Add this line at the bottom,
            
                Route::view('upload', 'upload');

        4. Make a controller name uploadController

            command: php artisan make:controller uploadController

        5. Make a function in it 

                class UploadController extends Controller
                {
                    function index(){
                        return "Hello";
                    }
                }

        6. Make a route of the controller in the web.php

            At the top add this line,

                use App\Http\controllers\UploadController;

            At the bottom add this line,

                Route::post('upload', [UploadController::class, 'index']);
                
        7. Now modify the function in the controller

            class UploadController extends Controller
            {
                function index(Request $req){
                    return $req->file('file')->store('img');
                }
            }                    

        8. A small modification in the html form

                <h1>Upload File</h1>
                <form action="upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file"><br><br>
                    <button type="submit">Upload File</button>
                </form>

        9. Now the uploaded file will be found in "storage/app/img" location