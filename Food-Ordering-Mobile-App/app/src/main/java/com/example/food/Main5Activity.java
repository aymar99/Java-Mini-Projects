package com.example.food;

import android.content.Context;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.Toast;

public class Main5Activity extends AppCompatActivity {

    SQLiteDatabase db;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main5);
        db=openOrCreateDatabase("Food", Context.MODE_PRIVATE, null);
        db.execSQL("CREATE TABLE IF NOT EXISTS cart(item VARCHAR,cost VARCHAR);");
        Button add=(Button)findViewById(R.id.add_biriyani);
        final String name="Biriyani";
        final String cost="90";
        add.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                db.execSQL("INSERT INTO cart VALUES('"+name+"','"+cost+
                        "');");
                Toast.makeText(getApplicationContext(),"Item added to cart",Toast.LENGTH_SHORT).show();
            }
        });
    }
}
