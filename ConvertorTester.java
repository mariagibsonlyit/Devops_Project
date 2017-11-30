package exchange;

import java.util.*;

public class ConvertorTester {

	    /**
			}
		   This is a simple tester class for Converter class.
		*/
		
		
		   public static void main(String[] args) {
	}
		   {
		      Scanner keyIn = new Scanner(System.in);
		      
		      //create converter object myConverter
		       Convertor myConverter = new Convertor();

		      System.out.print("Please enter TODAYS exchange rate from Euro to stg: ");
		      double todaysRate = keyIn.nextDouble();
		      
		      //set rate
		       myConverter.setRate(todaysRate);
		      
		      //do conversion
		      System.out.print("Please enter amount in euro to convert: ");
		      double amount = keyIn.nextDouble();
		      
		      //convert to Stg
		      System.out.println(amount +" euro = "  +(myConverter).convertToSterling(amount) +" stg");

		      System.out.print("Please enter amount in stg to convert: ");
		      amount = keyIn.nextDouble();
		      
		      //convert to Stg
		      System.out.println(amount +" stg = "  +myConverter.convertToEuro(amount) +" euro");
		      System.out.println("Today's rate is 1 Euro =  "  +myConverter.getRate() +" stg");

		      
		   }
		
      
	
  }

