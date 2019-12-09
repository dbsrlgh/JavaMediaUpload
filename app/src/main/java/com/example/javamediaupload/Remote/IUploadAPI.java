package com.example.javamediaupload.Remote;

import okhttp3.MultipartBody;
import retrofit2.Call;
import retrofit2.http.Multipart;
import retrofit2.http.POST;
import retrofit2.http.Part;

public interface IUploadAPI {
    @Multipart
    @POST("upload/upload.php")
    Call<String> uploadFile(@Part MultipartBody.Part file);
}