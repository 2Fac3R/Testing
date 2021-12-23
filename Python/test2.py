from difflib import SequenceMatcher
from fuzzywuzzy import fuzz

m = SequenceMatcher(None, "IBM", "IBM Corporation")

print(fuzz.partial_ratio("Rallye Motors Mercedes- Benz", "Rallye Motors | Mercedes-Benz"))