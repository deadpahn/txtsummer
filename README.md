# txtsummer

### What is it? 
This is a simple script to create a summarized text to speach audio file of an epub book.

### Method used to summarize the text:
For the first incarnation I simple scan the book for paragraphs. I use the FIRST and LAST line of the paragraph. This is a commonly used "speed reading" technique. My tests have found that it cuts %80 of the book text however the main points do seem to stay intact upon review a few tests.

### Usage:
* Copy epub into script folder.
* Rename it book to "book.epub".
* Run init.sh script.
* Output file is "book.ogg"

### TODO:
* Change TTS engine to something more pleasent to the ear
* Detect book name and name the audio file accordingly
* Implement more reliable text summarization techniques
* Re-write using python
* Implement NLTK
* Implement other speed reading techniques
