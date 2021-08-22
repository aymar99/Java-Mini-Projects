package com.example.food;

import android.app.Activity;
import android.content.Context;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;
import android.database.sqlite.SQLiteDatabase;
import android.app.AlertDialog.Builder;

public class Main2Activity extends AppCompatActivity {
    SQLiteDatabase db;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main2);
        db=openOrCreateDatabase("Food", Context.MODE_PRIVATE, null);
        db.execSQL("CREATE TABLE IF NOT EXISTS cart(item VARCHAR,cost VARCHAR);");
        Button add=(Button)findViewById(R.id.add_pizza);
        final String name="Pizza";
        final String cost="120";
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
