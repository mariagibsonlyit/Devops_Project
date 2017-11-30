/**
 * 
 */
package exchange;

/**
 * @author LSU14-26
 *
 */
public class Convertor {
        public class ConverterTester {

	}

		public class Converter {

	}

		/**
		   This class is used to calculate the conversion between
		   Sterling and Euros.  (or any other currency)
		*/
		  
		   
		   //instance variables  
		      private double rate;
		   
		   //methods
		      public void setRate(double rateIn)
		      {
		         rate = rateIn;
		      }
		   
		      public double getRate()
		      {
		         return rate ;
		      }
		   
		   
		   //Convert euro amount to sterling.
		        
		      public double convertToSterling(double amount)
		      {
		         return  rate * amount;
		      }
		   
		    //Convert sterling to euro.
		     
		      public double convertToEuro(double amount)
		      {
		         return  amount/rate;
		      }
		   
		   
		   
		   

	}


