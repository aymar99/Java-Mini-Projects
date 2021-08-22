
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package conference;
import java.util.GregorianCalendar;

/**
 *
 * @author admin
 */
public class date_loc {
    String date;
    String locationn;
    public date_loc(){
        generate();
    }
    public static int randBetween(int start, int end) {
        return start + (int)Math.round(Math.random() * (end - start));
    }
    public void generate(){
        String[] location=new String[5];
        location[0]="Delhi";
        location[1]="Mumbai";
        location[2]="Banglore";
        location[3]="Chennai";
        location[4]="Hyderabad"; 

        GregorianCalendar gc = new GregorianCalendar();

        int year = randBetween(2018, 2019);

        gc.set(gc.YEAR, year);

        int dayOfYear = randBetween(1, gc.getActualMaximum(gc.DAY_OF_YEAR));

        gc.set(gc.DAY_OF_YEAR, dayOfYear);
        
        int l=randBetween(0,4);
        locationn=location[l];
        date=gc.get(gc.YEAR) + "-" + (gc.get(gc.MONTH) + 1) + "-" + gc.get(gc.DAY_OF_MONTH) ;
    }
    
    
}
