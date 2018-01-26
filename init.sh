#convert book
echo "Convert Epub to txt format";
ebook-convert book.epub ./book.txt
echo "Processing epub txt";
/usr/bin/php ./txtSummer.php > summed.txt;
#tts script
echo "Converting text to speech";
espeak -f summed.txt -s 220 -v en-us --stdout > book.ogg;
echo "Resampling File";
sox book.ogg -r 22050 -c 1 book.ogg;
rm ./book.epub;
rm ./book.txt;
rm ./summed.txt;
