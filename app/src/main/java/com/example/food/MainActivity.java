package com.example.food;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private EditText email;
    private EditText pwd;
    private Button login;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        login=(Button)findViewById(R.id.login);
        email=(EditText)findViewById(R.id.input_email);
        pwd=(EditText)findViewById(R.id.input_password);
        login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(email.getText().toString().equals("admin") && pwd.getText().toString().equals("xyz"))
                {
                    Intent i=new Intent(MainActivity.this,Main4Activity.class);
                    startActivity(i);
                }
                else
                {
                    email.setText("");
                    pwd.setText("");
                }
            }
        });

    }
}
