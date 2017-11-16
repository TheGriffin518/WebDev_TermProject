/*
 * Connects to the SQL Database. 
 */

package connector;

import java.sql.*;
import object.DiaryEntry;

public class SQLConnector { 

    private Connection connection;
    private Statement statement;
    private ResultSet results;
    private int check;
    
    public SQLConnector () {
	try {
	    connection = DriverManager.getConnection("jdbc:mariadb://localhost:3306/diary?verifyServerCertificate=false" +
						     "&useSSL=true","diarytest","test");
	} catch (Exception e) {
	    System.out.print("Error" + e);
	}
    } // SQLConnector
    
    

} // Class SQLConnector