from faker import Faker

fake = Faker()
app_name = "crm"
table_name = "organization"

print("[\n")
for x in range(1,10):
    print(
        f"{{\n"
        f"\"model\": \"{app_name}.{table_name}\",\n"
        f"\"pk\": {x},\n"
        f"\"fields\": {{\n"
        f"\"name\": \"{fake.company()}\",\n"
        f"\"email\": \"{fake.company_email()}\",\n"
        f"\"phone\": \"{fake.phone_number()}\",\n"
        f"\"address\": \"Address #{fake.street_address()}\",\n"
        f"\"city\": \"{fake.city()}\",\n"
        f"\"country\": \"{fake.country_code()}\",\n"
        f"\"postal_code\": \"{fake.postcode()}\"\n"
        f"}}\n"
        f"}},\n"
    )
print("]\n")