import kagglehub
from kagglehub import KaggleDatasetAdapter
import matplotlib.pyplot as plt

df = kagglehub.dataset_load(
    KaggleDatasetAdapter.PANDAS,
    "azeembootwala/titanic",
    "test_data.csv",
)


# Partie 1
print(df.head())
print(df.tail())
print(df.shape)
print(df.isnull().sum())

# Partie 2 : KPI
total_passengers = len(df)
total_survivors = df["Survived"].sum()
avg_fare = df["Fare"].mean()
survival_rate = df["Survived"].mean() * 100

print(f"Passagers      : {total_passengers}")
print(f"Survivants     : {total_survivors}")
print(f"Prix moyen     : {avg_fare:.2f}")
print(f"Taux de survie : {survival_rate:.1f}%")

# Partie 3 : Analyse
print(df.groupby("Sex")["Survived"].mean())


# Reconstruire la classe depuis les colonnes(je utilise un dataset different de la description(je fait a transformation))
def get_class(row):
    if row["Pclass_1"] == 1:
        return "1"
    if row["Pclass_2"] == 1:
        return "2"
    if row["Pclass_3"] == 1:
        return "3"
    return "Inconnu"


df["Pclass"] = df.apply(get_class, axis=1)

# paie le plus cher
print(df.groupby("Pclass")["Fare"].mean().sort_values(ascending=False))

# Partie 5 : Dashboard
fig, axs = plt.subplots(1, 2, figsize=(10, 4))

df.groupby("Sex")["Survived"].sum().plot(kind="bar", ax=axs[0])
axs[0].set_title("Survie par sexe")
axs[0].set_xlabel("")

df.groupby("Pclass")["Fare"].mean().plot(kind="bar", ax=axs[1])
axs[1].set_title("Prix moyen par classe")
axs[1].set_xlabel("")

plt.tight_layout()
plt.show()
