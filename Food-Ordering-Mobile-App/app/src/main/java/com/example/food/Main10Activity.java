package com.example.food;

import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

public class Main10Activity extends AppCompatActivity {

    SQLiteDatabase db;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main10);
        db=openOrCreateDatabase("Food", Context.MODE_PRIVATE, null);
        db.execSQL("CREATE TABLE IF NOT EXISTS cart(item VARCHAR,cost VARCHAR);");
        TextView display=(TextView)findViewById(R.id.display);
        Cursor c=db.rawQuery("SELECT * FROM cart", null);
        if(c.getCount()==0)
        {
            Toast.makeText(getApplicationContext(),"No Items Found",Toast.LENGTH_SHORT).show();
            return;
        }
        StringBuffer buffer=new StringBuffer();
        while(c.moveToNext())
        {
            buffer.append("Item: "+c.getString(0)+"\n");
            buffer.append("Cost: "+c.getString(1)+"\n");
        }
        display.setText(buffer.toString());
        Button b1=(Button)findViewById(R.id.logout);
        b1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                db.execSQL("DROP TABLE cart;");
                Intent i=new Intent(Main10Activity.this,MainActivity.class);
                startActivity(i);
            }
        });
    }
}
