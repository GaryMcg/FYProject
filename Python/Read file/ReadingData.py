#!C:\Users\garym\OneDrive - GMIT\5th year\FYproject\Execution of Project\Python\Read file\ReadingData
print('Read Me File')
#this is reading a file 

def main():

    f=open("guru99.txt", "r")
    if f.mode == 'r':
        contents =f.read()
        print(contents)

    if os.path.isdir(apkLocation + apkFolder + 'C:\\Users\\garym\\OneDrive - GMIT\\5th year\\FYproject\\Execution of Project\\Python\\Read file\\ReadingData'):
        for root, dirs, files in os.walk(apkLocation + apkFolder):
            
            for name in files:
                if name.endswith(("guru99", ".txt")):
                    print os.path.abspath(name) 

if __name__== "__main__":
  main()