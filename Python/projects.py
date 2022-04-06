from faker import Faker

fake = Faker()
app_name = "crm"
table_name = "project"
records_number = 30

print("[\n")
for x in range(1,records_number):
    print(
        f"{{\n"
        f"\"model\": \"{app_name}.{table_name}\",\n"
        f"\"pk\": {x},\n"
        f"\"fields\": {{\n"
        f"\"organization\": \"{fake.random_digit()}\",\n"
        f"\"name\": \"{fake.catch_phrase()}\",\n"
        f"\"description\": \"{fake.text(max_nb_chars=80)}\"\n"
        f"}}\n"
        f"}},\n"
    )
print("]\n")