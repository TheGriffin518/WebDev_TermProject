/*
 * The object that represents the project diary. 
 */ 

package object;

/*
 * Is the implementation of the diary entry. Represents entries into 
 * the diary.  
 */

public class DiaryEntry {

    private String author, title, postDate, entryText;

    public DiaryEntry() {

    } // DiaryEntry

    public DiaryEntry(String author, String title, String postDate, String entry) {
	this.author = author;
	this.title = title;
	this.postDate = postDate;
	this.entryText =  entry;
    } // DiaryEntry

    private void setAuthor(String author) {
	this.author = author;
    } // setAuthor

    private void setTitle(String title) {
	this.title = title;
    } // setTitle

    private void setPostDate(String postDate) {
	this.postDate = postDate;
    } // setPostDate

    private void setEntryText(String entryText) {
	this.entryText = entryText;
    } // setEntryText
    
    private String getAuthor() {
	return author;
    } // getAuthor

    private String getTitle() {
	return title;
    } // getTitle

    private String getPostDate() {
	return postDate;
    } // getPostDate
    
    private String getEntryText() {
	return entryText;
    } // getEntry


} // ProjectDiary