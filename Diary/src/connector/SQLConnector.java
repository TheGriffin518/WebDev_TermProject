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
	    connection = DriverManager.getConnection("jdbc:mysql://localhost:3306/diary?verifyServerCertificate=false" +
						     "&useSSL=true","diarytest","test");
	} catch (Exception e) {
	    System.out.print("Error" + e);
	    }
    } // SQLConnector
    
    public int AddEntry(DiaryEntry entry) {
        String query = "INSERT INTO diary(post_date, author, title, entry) VALUES ('" + entry.getPostDate() + "',"
                + "'"+ entry.getAuthor() +"', '"+ entry.getTitle() +"', '"+entry.getEntryText()+"');";
        try {
            Statement s = connection.createStatement();
            check = s.executeUpdate(query);
        } catch (Exception e) {
            System.out.println(e);
        }
    }

} // Class SQLConnector