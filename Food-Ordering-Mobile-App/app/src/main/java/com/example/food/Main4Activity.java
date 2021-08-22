package com.example.food;

import android.content.Context;
import android.content.Intent;
import android.database.Cursor;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.ListView;
import android.widget.Toast;
import android.widget.AdapterView;
import android.view.View;
import android.database.sqlite.SQLiteDatabase;

public class Main4Activity extends Activity {
    // Array of strings...
    String[] mobileArray = {"Burger","Pizza","Ice Cream","Biriyani","chicken 65","Gulab Jamun","Paani Puri"};
    SQLiteDatabase db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main4);

        ArrayAdapter adapter = new ArrayAdapter<String>(this,
                R.layout.activity_listview, mobileArray);

        ListView listView = (ListView) findViewById(R.id.mobile_list);
        listView.setAdapter(adapter);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position,
                                    long id) {
                if(position == 0)
                {
                    Intent i=new Intent(Main4Activity.this,Main3Activity.class);
                    startActivity(i);
                }
                if(position == 1)
                {
                    Intent i=new Intent(Main4Activity.this,Main2Activity.class);
                    startActivity(i);
                }
                if(position == 2)
                {
                    Intent i=new Intent(Main4Activity.this,Main6Activity.class);
                    startActivity(i);
                }
                if(position == 3)
                {
                    Intent i=new Intent(Main4Activity.this,Main5Activity.class);
                    startActivity(i);
                }
                if(position == 4)
                {
                    Intent i=new Intent(Main4Activity.this,Main7Activity.class);
                    startActivity(i);
                }
                if(position == 5)
                {
                    Intent i=new Intent(Main4Activity.this,Main8Activity.class);
                    startActivity(i);
                }
                if(position == 6)
                {
                    Intent i=new Intent(Main4Activity.this,Main9Activity.class);
                    startActivity(i);
                }

            }
        });
        db=openOrCreateDatabase("Food", Context.MODE_PRIVATE, null);
        db.execSQL("CREATE TABLE IF NOT EXISTS cart(item VARCHAR,cost VARCHAR);");
        Button view_cart=(Button)findViewById(R.id.view_cart);
        view_cart.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
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
                Toast.makeText(getApplicationContext(),buffer.toString(),Toast.LENGTH_SHORT).show();
            }
        });
        Button confirm=(Button)findViewById(R.id.confirm);
        confirm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(Main4Activity.this,Main10Activity.class);
                startActivity(i);
            }
        });
    }
}