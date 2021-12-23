import argparse
import csv
from fuzzywuzzy import fuzz

# Help Usage
parser = argparse.ArgumentParser(
    description='''Removes duplicate entries in csv file. ''',
    epilog="""Hey CloserIQ. ;)""")
parser.add_argument('--input', type=str, help='input csv filename')
parser.add_argument('--output', type=str, help='output csv filename')
args = parser.parse_args()


# Removes duplicate entries in csv file
def remove_dups(input, output):
    lines = []
    writer = csv.writer(output)
    # read line from csv
    for line in input:
        # Checks if 'name' is not in lines list
        if line[1] not in lines:
            # checks the ratio diference between two strings
            if fuzz.partial_ratio(line[1], str(line)) == 100:
                # Appends name to lines list
                lines.append(line[1])
                # Writes the row to the output file
                writer.writerow(line)
        

def main():
    input = csv.reader(open(args.input, 'r'))
    output = open(args.output, 'w')

    remove_dups(input, output)

if __name__ == "__main__":
    main()