from faker import Faker

fake = Faker()
app_name = "crm"
table_name = "meeting"
records_number = 50

print("[\n")
for x in range(1,records_number):
    print(
        f"{{\n"
        f"\"model\": \"{app_name}.{table_name}\",\n"
        f"\"pk\": {x},\n"
        f"\"fields\": {{\n"
        f"\"project\": \"{fake.random_digit()}\",\n"
        f"\"contact\": \"{fake.random_digit()}\",\n"
        f"\"title\": \"{fake.bs()}\",\n"
        f"\"description\": \"{fake.text(max_nb_chars=80)}\",\n"
        f"\"date\": \"{fake.date_time()}\"\n"
        f"}}\n"
        f"}},\n"
    )
print("]\n")