import json 
import csv  
  
# Function to convert a CSV to JSON 
# Takes the file paths as arguments 
def make_json(csvFilePath, jsonFilePath): 
      
    # create a dictionary 
    
    ls=[] 
    # Open a csv reader called DictReader 
    with open(csvFilePath, 'r', encoding='utf-8',) as csvf: 
        csvReader = csv.reader(csvf) 
          
        # Convert each row into a dictionary  
        # and add it to data 
        for rows in csvReader: 
            data = {} 
            data['name'] = rows[3]
            ki = rows[7].split('/')
            out=""
            for i in ki[:-1]:
                out+=i
                out+='/'
            out+='preview'
            data['link'] = out
            ls.append(data)
            # Assuming a column named 'No' to 
            # be the primary key 
        
  
    # Open a json writer, and use the json.dumps()  
    # function to dump data 
    with open(jsonFilePath, 'w', encoding='utf-8') as jsonf: 
        jsonf.write(json.dumps(ls, indent=4)) 
          
# Driver Code 
  
# Decide the two file paths according to your  
# computer system 
csvFilePath = r'Freshers_grpact21.csv'
jsonFilePath = r'freshers_grp_activity21.json'
  
# Call the make_json function 
make_json(csvFilePath, jsonFilePath)