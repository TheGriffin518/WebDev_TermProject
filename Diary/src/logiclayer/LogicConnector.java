/*
 * Is the logic layer between the servlet and the SQL database. 
 */

 package logiclayer;

 import java.sql.ResultSet;

 import connector.SQLConnector;
 import object.DiaryEntry;

 public class LogicConnector {
     SQLConnector conn;

     public LogicConnector() {
         conn = new SQLConnector();
     }

     public void addEntry(DiaryEntry entry) {
         return conn.addEntry();
     }
 }
